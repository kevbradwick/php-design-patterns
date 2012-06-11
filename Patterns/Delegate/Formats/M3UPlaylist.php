<?php

namespace Patterns\Delegate\Formats;

/**
 *
 */
class M3UPlaylist implements Playlist
{
    /**
     * @param array $songs
     * @return string
     */
    public function getPlaylist(array $songs)
    {
        $m3u = "#EXTM3U\n\n";

        foreach ($songs as $song) {
            $m3u .= sprintf("#EXTINF:-1,%s\n", $song['title']);
            $m3u .= "{$song['location']}\n";
        }

        return $m3u;
    }

}
