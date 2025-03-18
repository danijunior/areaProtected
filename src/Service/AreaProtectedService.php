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
            if ($height === 0) {
                continue;
            }

            if ($height > $maxHeight) {
                $maxHeight = $height;
            } else if ($height === $maxHeight) {
                continue;
            } else {
                $areaProtected++;
            }
        }

        return $areaProtected;
    }
}