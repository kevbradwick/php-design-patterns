<?php

namespace Patterns\Delegate\Formats;

/**
 * @author Kevin Bradwick <kbradwick@gmail.com>
 */
class PLSPlaylist implements Playlist
{
    /**
     * @param array $songs
     * @return string
     */
    public function getPlaylist(array $songs)
    {
        $pls = "[playlist]\nNumberOfEntries=" . count($songs) . "\n\n";

        foreach ($songs as $songCount => $song) {
            $counter = $songCount + 1;
            $pls .= sprintf("File%d=%s\n", $counter, $song['location']);
            $pls .= sprintf("Title%d=%s\n", $counter, $song['title']);
            $pls .= sprintf("Length%d=-1\n\n", $counter);
        }

        return $pls;
    }
}
