<?php

namespace App\Service;

class AreaProtectedService
{
    /**
     * @param array<int> $altitudes
     * @return int
     */
    public static function calculateAreaProtected(array $altitudes = []): int
    {
        $maxHeight = 0;
        $areaProtected = 0;

        foreach ($altitudes as $height) {

            if ($height === $maxHeight) {
                continue;
            }

            if ($height > $maxHeight) {
                $maxHeight = $height;
            } else {
                $areaProtected++;
            }
        }

        return $areaProtected;
    }
}