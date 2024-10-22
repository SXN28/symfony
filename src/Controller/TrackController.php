<?php 

namespace App\Controller;

use App\Entity\Track;
use App\Factory\TrackFactory;
use App\Repository\FavoriteRepository;
use App\Repository\TrackRepository;
use App\Repository\UserRepository;
use App\Service\AuthSpotifyService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TrackController extends AbstractController
{
    public function __construct(
        private readonly AuthSpotifyService $authSpotifyService,
        private readonly HttpClientInterface $httpClient,
        private readonly TrackFactory $trackFactory,
        private readonly EntityManagerInterface $entityManager,
        private readonly UserRepository $userRepository,
        private readonly TrackRepository $trackRepository
    ) {}

    #[Route('/track', name: 'app_track_index')]
    public function index(Request $request): Response
    {
        $token = $this->authSpotifyService->auth();
        $trackQuery = $request->query->get('query', '');

        $tracks = [];

        if ($trackQuery) {
            $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/search', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'q' => $trackQuery,
                    'type' => 'track',
                    'limit' => 12,
                ],
            ]);

            $tracks = $this->trackFactory->createMultipleFromSpotifyData($response->toArray()['tracks']['items']);
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('track/results.html.twig', [
                'tracks' => $tracks,
                'query' => $trackQuery,
            ]);
        }

        return $this->render('track/index.html.twig', [
            'tracks' => $tracks,
            'query' => $trackQuery,
        ]);
    }

    #[Route('/track/{id}', name: 'track_details')]
    public function details(string $id): Response
    {
        $token = $this->authSpotifyService->auth();

        $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/tracks/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);
        
        $track = $response->toArray();

        $recommendationsResponse = $this->httpClient->request('GET', 'https://api.spotify.com/v1/recommendations', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
            'query' => [
                'seed_tracks' => $id,
                'limit' => 12,
            ],
        ]);

        $recommendations = $recommendationsResponse->toArray()['tracks'];

        return $this->render('track/details.html.twig', [
            'track' => $track,
            'recommendations' => $recommendations,
        ]);
    }

    #[Route('/addfavorites', name: 'app_add_favorites', methods: ['POST'])]
    public function addFavorite(Request $request, TrackRepository $trackRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour ajouter des favoris.');
            return $this->redirectToRoute('app_track_index');
        }

        $trackId = $request->request->get('id');
        $track = $trackRepository->findOneBy(['id' => $trackId]);

        if (!$track) {
            $track = $this->getTrack($trackId);
            $em->persist($track);
            $em->flush();
            $this->addFlash('success', 'Le morceau a été ajouté avec succès.');
        } else {
            $this->addFlash('warning', 'Le morceau existe déjà.');
        }

        $user->addTrack($track);
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('app_favorites');
    }

    #[Route('/favorites', name: 'app_favorites', methods: ['GET'])]
    public function showFavorites(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour voir vos favoris.');
            return $this->redirectToRoute('app_track_index');
        }

        $favoriteTracks = $user->getFavoriteTracks();

        return $this->render('track/favorites.html.twig', [
            'favoriteTracks' => $favoriteTracks,
        ]);
    }

    #[Route('/removefavorites/{trackId}', name: 'app_remove_favorites', methods: ['POST'])]
    public function removeFavorite(string $trackId, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour supprimer des favoris.');
            return $this->redirectToRoute('app_track_index');
        }

        $track = $this->trackRepository->find($trackId);
        if (!$track) {
            $this->addFlash('error', 'Morceau introuvable.');
            return $this->redirectToRoute('app_favorites');
        }

        $user->removeFavoriteTrack($track);
        $em->persist($user);
        $em->flush();

        $this->addFlash('success', 'Le morceau a été supprimé de vos favoris.');
        return $this->redirectToRoute('app_favorites');
    }
}

