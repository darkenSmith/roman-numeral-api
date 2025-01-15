<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class romanNumberConvertApiTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function test_show_all_convert_numbers(): void
    {
        $response = $this->get('api/convert/all');
        $response->assertStatus(200);
    }

    public function test_convert_number(): void
    {
        $response = $this->post('api/convert?convert_number=1');
        $this->assertSame('I', $response->collect()->toArray()['roman_numeral']);
        $response->assertStatus(200);
    }

    public function test_top_ten_convert_number(): void
    {
        $response = $this->get('api/convert/top');
        $response->assertStatus(200);
    }
//
//    public function top_ten_convert_number(): void
//    {
//        $this->post('api/convert?convert_number=4');
//        $this->post('api/convert?convert_number=4');
//        $this->post('api/convert?convert_number=1');
//        $this->post('api/convert?convert_number=2');
//        $this->post('api/convert?convert_number=2');
//        $this->post('api/convert?convert_number=1');
//        $this->post('api/convert?convert_number=3');
//        $this->post('api/convert?convert_number=3');
//        $this->post('api/convert?convert_number=3');
//        $this->post('api/convert?convert_number=1');
//        $this->post('api/convert?convert_number=1');
//        $this->post('api/convert?convert_number=1');
//        $this->post('api/convert?convert_number=55');
//        $this->post('api/convert?convert_number=55');
//        $this->post('api/convert?convert_number=55');
//        $this->post('api/convert?convert_number=6');
//        $this->post('api/convert?convert_number=6');
//        $this->post('api/convert?convert_number=6');
//        $this->post('api/convert?convert_number=8');
//        $this->post('api/convert?convert_number=8');
//        $this->post('api/convert?convert_number=8');
//        $this->post('api/convert?convert_number=11');
//        $this->post('api/convert?convert_number=11');
//        $this->post('api/convert?convert_number=11');
//        $this->post('api/convert?convert_number=20');
//        $this->post('api/convert?convert_number=20');
//        $this->post('api/convert?convert_number=20');
//        $this->post('api/convert?convert_number=3');
//        $this->post('api/convert?convert_number=3');
//        $this->post('api/convert?convert_number=3');
//    }
}
