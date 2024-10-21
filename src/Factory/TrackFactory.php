<?php

namespace App\Factory;
use App\Entity\Track;

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

    public function createFromSpotifyData(array $spotifyTrack): Track
    {
        return new Track(
            discNumber: (int) $spotifyTrack['disc_number'],
            durationMs: (int) $spotifyTrack['duration_ms'],
            explicit: (bool) $spotifyTrack['explicit'],
            isrc: $spotifyTrack['external_ids']['isrc'] ?? '',
            spotifyUrl: $spotifyTrack['external_urls']['spotify'] ?? '',
            href: $spotifyTrack['href'] ?? '',
            id: $spotifyTrack['id'],
            isLocal: (bool) ($spotifyTrack['is_local'] ?? false),
            name: $spotifyTrack['name'],
            popularity: (int) $spotifyTrack['popularity'],
            previewUrl: $spotifyTrack['preview_url'] ?? null,
            trackNumber: (int) $spotifyTrack['track_number'],
            type: $spotifyTrack['type'],
            uri: $spotifyTrack['uri'],
            pictureLink: $spotifyTrack['album']['images'][0]['url'] ?? null
        );
    }
}
