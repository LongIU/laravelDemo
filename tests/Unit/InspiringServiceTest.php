<?php

namespace Tests\Unit;

use App\Services\InspiringService;
use PHPUnit\Framework\TestCase;

class InspiringServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        self::assertIsString(
            (new InspiringService())->inspire()
        );
    }
}
