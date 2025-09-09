<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ExampleUnitTest extends TestCase
{
    #[Test]
    public function it_can_add_two_numbers()
    {
        $a = 5;
        $b = 10;
        $result = $a + $b;

        $this->assertEquals(15, $result);
    }
}