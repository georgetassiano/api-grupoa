<?php

namespace Tests\Unit;

use App\Services\BaseService;
use PHPUnit\Framework\TestCase;

class BaseServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_if_limit_passed_is_null_set_limit_for_10()
    {
        $expected = 10;
        $limit = null;
        $this->assertEquals($expected, BaseService::return_limit_for_pagination($limit));
    }

    public function test_if_limit_informed_is_not_null_then_return_limit_informed()
    {
        $expected = 20;
        $limit = 20;
        $this->assertEquals($expected, BaseService::return_limit_for_pagination($limit));
    }
}
