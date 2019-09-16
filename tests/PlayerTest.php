<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class PlayerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetPlayer()
    {
        $this->get('api/player/1');
        $this->seeStatusCode(200);
        //$this->assertEquals(200, $response->status());
    }
}
