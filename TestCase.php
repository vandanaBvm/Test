<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function testing()
    {
        return 0 ;
    }

    public function test()
    {
        return 0 ;
    }
}
