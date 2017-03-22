<?php

declare(strict_types=1);

namespace ApiAi\Tests;

use Faker\Factory;
use Faker\Generator;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @return Generator
     */
    protected function faker(): Generator
    {
        return Factory::create();
    }

    /**
     * @param string $class
     * @return \Mockery\MockInterface|\Mockery\Mock|mixed
     */
    protected function mock(string $class)
    {
        return \Mockery::mock($class);
    }
}
