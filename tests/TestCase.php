<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public const int ITERATIONS = 512;

    /**
     * To iterate over large ranges of test data, use a prime-number interval to
     * avoid any synchronisation problems.
     */
    public const int LARGE_PRIME = 235741;
}
