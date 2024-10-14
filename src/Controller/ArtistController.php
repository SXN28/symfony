<?php 

namespace App\Controller;

use App\Service\AuthSpotifyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ArtistController extends AbstractController
{
    public function __construct(
        private readonly AuthSpotifyService $authSpotifyService,
        private readonly HttpClientInterface $httpClient
    ) {}

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
                'market' => 'FR',
                'limit' => 50 
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
