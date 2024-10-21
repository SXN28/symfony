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

        return $this->render('track/details.html.twig', [
            'track' => $track,
        ]);
    }


}
