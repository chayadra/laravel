<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class MathControllerTest extends TestCase
{
    #[Test]
    public function it_can_add_two_numbers_from_controller()
    {
        $response = $this->get('/add?a=5&b=7');

        $response->assertStatus(200);
        $response->assertJson([
            'result' => 12,
        ]);
    }
}