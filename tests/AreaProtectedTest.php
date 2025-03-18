<?php

namespace tests;

use App\AreaProtectedService;
use PHPUnit\Framework\TestCase;


class AreaProtectedTest extends TestCase
{
    public function testGetAreaProtected(): void
    {
        $altitudes = [30, 27, 17, 42, 29, 12, 14, 41, 42, 42];

        $result = AreaProtectedService::calculateAreaProtected($altitudes);

        $this->assertEquals(6, $result);
    }

    public function testAreaProtectedWithAllSameHeights(): void
    {
        $altitudes = [42, 42, 42, 42, 42];
        $result = AreaProtectedService::calculateAreaProtected($altitudes);

        $this->assertEquals(0, $result); // Aucune zone protégée car tout est le même
    }

    public function testAreaProtectedWithIncreasingHeights(): void
    {
        $altitudes = [1, 2, 3, 4, 5];
        $result = AreaProtectedService::calculateAreaProtected($altitudes);

        $this->assertEquals(0, $result); // Aucune zone protégée car tout est en augmentation
    }

    public function testAreaProtectedWithDecreasingHeights(): void
    {
        $altitudes = [5, 4, 3, 2, 1];
        $result = AreaProtectedService::calculateAreaProtected($altitudes);

        $this->assertEquals(4, $result); // Tout est protégé sauf la prémiere
    }

}