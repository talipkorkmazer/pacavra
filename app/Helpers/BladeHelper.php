<?php

namespace App\Helpers;

class BladeHelper
{
    public static function getImages(string $images): array
    {
        $images = str_replace(['[', ']', '"'], '', $images);

        return explode(',', $images);
    }
}