<?php 

namespace App\Controller;

use App\Entity\Artist;
use App\Entity\User;
use App\Repository\ArtistRepository;
use App\Repository\UserRepository;
use App\Service\AuthSpotifyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ArtistController extends AbstractController
{
    public function __construct(
        private readonly AuthSpotifyService $authSpotifyService,
        private readonly HttpClientInterface $httpClient,
        private readonly EntityManagerInterface $entityManager,
        private readonly UserRepository $userRepository,
        private readonly ArtistRepository $artistRepository
    ) {}

    #[Route('/artist', name: 'app_artist_index')]
    public function index(Request $request): Response
    {
        $token = $this->authSpotifyService->auth();
        $artistQuery = $request->query->get('artist_query', '');

        $artists = [];

        if ($artistQuery) {
            $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/search', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'q' => $artistQuery,
                    'type' => 'artist',
                    'limit' => 12,
                ],
            ]);

            $artists = $response->toArray()['artists']['items'];
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('artist/results.html.twig', [
                'artists' => $artists,
                'artist_query' => $artistQuery,
            ]);
        }

        return $this->render('artist/index.html.twig', [
            'artists' => $artists,
            'artist_query' => $artistQuery,
        ]);
    }

    #[Route('/artist/{id}', name: 'artist_details')]
    public function details(string $id): Response
    {
        $token = $this->authSpotifyService->auth();

        $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/artists/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);
        
        $artist = $response->toArray();

        $albumsResponse = $this->httpClient->request('GET', 'https://api.spotify.com/v1/artists/' . $id . '/albums', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
            'query' => [
                'include_groups' => 'album,single',
            ]
        ]);

        $albums = $albumsResponse->toArray()['items'];

        $topTracksResponse = $this->httpClient->request('GET', 'https://api.spotify.com/v1/artists/' . $id . '/top-tracks', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ]
        ]);

        $topTracks = $topTracksResponse->toArray()['tracks'];

        return $this->render('artist/details.html.twig', [
            'artist' => $artist,
            'albums' => $albums,
            'top_tracks' => $topTracks,
        ]);
    }

    #[Route('/addfavorites/artist', name: 'app_add_favorites_artist', methods: ['POST'])]
    public function addFavoriteArtist(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour ajouter des artistes favoris.');
            return $this->redirectToRoute('app_track_index');
        }

        $artistId = $request->request->get('id');
        $artist = $this->artistRepository->findOneBy(['id' => $artistId]);

        if (!$artist) {
            $token = $this->authSpotifyService->auth();
            $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/artists/' . $artistId, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
            ]);

            $artistData = $response->toArray();
            $artist = new Artist($artistData['id'], $artistData['name'], $artistData['external_urls']['spotify']);
            
            $em->persist($artist);
            $em->flush();
            $this->addFlash('success', 'L\'artiste a été ajouté avec succès.');
        } else {
            $this->addFlash('warning', 'L\'artiste existe déjà.');
        }
        $user->addArtist($artist);
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('app_favorites_artists');
    }

    #[Route('/favorites/artists', name: 'app_favorites_artists', methods: ['GET'])]
    public function showFavoriteArtists(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour voir vos artistes favoris.');
            return $this->redirectToRoute('app_track_index');
        }

        $favoriteArtists = $user->getFavoriteArtists();

        return $this->render('artist/favorites.html.twig', [
            'favoriteArtists' => $favoriteArtists,
        ]);
    }

    #[Route('/removefavorites/artists/{artistId}', name: 'app_remove_favorites_artist', methods: ['POST'])]
    public function removeFavoriteArtist(string $artistId, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour supprimer des artistes favoris.');
            return $this->redirectToRoute('app_track_index');
        }

        $artist = $this->artistRepository->find($artistId);
        if ($artist) {
            $user->removeFavoriteArtist($artist);
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Artiste retiré des favoris.');
        } else {
            $this->addFlash('error', 'Artiste introuvable.');
        }

        return $this->redirectToRoute('app_favorites_artists');
    }

    

}
