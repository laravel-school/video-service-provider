<?php

namespace App\Services\Contracts;

interface VideoServiceInterface
{
    public function downloadVideo(string $url): string;
}
