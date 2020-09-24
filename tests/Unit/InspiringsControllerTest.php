<?php

namespace Tests\Unit;

use App\Http\Controllers\InspiringController;
use App\Services\InspiringService;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InspiringsControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Mockery 製作仿造物件
        $mock = \Mockery::mock(InspiringService::class);
        //預期被呼叫inspire，然後回傳值(名言)
        $mock->shouldReceive('inspire')->andReturn('名言');
        //宣告new物件
        $InspiringController = new InspiringController($mock);
        //self 呼叫inspire，判斷是否回傳'名言'
        self::assertEquals(
            '名言',
            $InspiringController->inspire()
        );
    }
}
