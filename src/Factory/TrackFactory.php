<?php

namespace App\Factory;

class TrackFactory
{
    public function createMultipleFromSpotifyData(array $spotifyTracks): array
    {
        $tracks = [];

        foreach ($spotifyTracks as $spotifyTrack) {
            $tracks[] = $spotifyTrack;
        }

        return $tracks;
    }
}
