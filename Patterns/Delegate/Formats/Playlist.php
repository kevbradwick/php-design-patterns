<?php

namespace Patterns\Delegate\Formats;


interface Playlist
{
    /**
     * @abstract
     * @param array $songs
     * @return string
     */
    public function getPlaylist(array $songs);
}
