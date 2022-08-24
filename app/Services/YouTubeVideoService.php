<?php

namespace App\Services;

use App\Services\Contracts\VideoServiceInterface;

class YouTubeVideoService implements VideoServiceInterface
{
    /**
     * @param string $url
     * @return string<$url>
     */
    public function downloadVideo(string $url): string
    {
        return $url;
    }
}
