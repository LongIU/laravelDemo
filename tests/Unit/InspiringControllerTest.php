<?php

namespace Tests\Unit;

use App\Http\Controllers\InspiringController;
use App\Services\InspiringService;
use PHPUnit\Framework\TestCase;

class InspiringControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $mock = \Mockery::mock(InspiringService::class);
        $mock->shouldReceive('inspire')->andReturn('關鍵');
        $inspiringController = new InspiringController($mock);
        self::assertEquals(
            '關鍵',
            $inspiringController->inspire()
        );
    }
}
