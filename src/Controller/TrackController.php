<?php 

namespace App\Controller;

use App\Factory\TrackFactory;
use App\Service\AuthSpotifyService;
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
        private readonly TrackFactory $trackFactory
    ) {}

    #[Route('/track', name: 'app_track_index')]
    public function index(Request $request): Response
    {
        $token = $this->authSpotifyService->auth();
        $trackQuery = $request->query->get('query', '');
        $artistQuery = $request->query->get('artist_query', '');

        $tracks = [];
        $artists = [];

        // Recherche de pistes
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

        // Recherche d'artistes
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
            return $this->render('track/results.html.twig', [
                'tracks' => $tracks,
                'artists' => $artists,
                'query' => $trackQuery,
                'artist_query' => $artistQuery,
            ]);
        }

        return $this->render('track/index.html.twig', [
            'tracks' => $tracks,
            'artists' => $artists,
            'query' => $trackQuery,
            'artist_query' => $artistQuery,
        ]);
    }


}
