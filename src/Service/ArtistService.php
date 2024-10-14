<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ArtistService
{
    private HttpClientInterface $httpClient;
    private AuthSpotifyService $authSpotifyService;

    public function __construct(HttpClientInterface $httpClient, AuthSpotifyService $authSpotifyService)
    {
        $this->httpClient = $httpClient;
        $this->authSpotifyService = $authSpotifyService;
    }

    public function getArtistDetails(string $id): array
    {
        $token = $this->authSpotifyService->auth(); // Authentification et récupération du token
    
        $response = $this->httpClient->request('GET', "https://api.spotify.com/v1/artists/{$id}", [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);
    
        return $response->toArray(); // Vérifiez ici si le format de réponse est correct
    }
    
}
