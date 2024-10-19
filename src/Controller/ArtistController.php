<?php 

namespace App\Controller;

use App\Service\AuthSpotifyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ArtistController extends AbstractController
{
    public function __construct(
        private readonly AuthSpotifyService $authSpotifyService,
        private readonly HttpClientInterface $httpClient
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
}
