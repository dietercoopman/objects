<?php
namespace DieterCoopman\Objects\Tests;

use DieterCoopman\Objects\Objects;
use Exception;
use PHPUnit\Framework\TestCase;


class ObjectsTest extends TestCase
{
    /** @test */
    public function it_is_initialized()
    {
        $objects = new Objects([]);
        $this->assertInstanceOf(Objects::class, $objects);
    }

    /** @test */
    public function it_can_convert_nested_objects(){

        $nested = (object) [(object) ['id' => 1], (object) ['id' => 2]];

        $objects = new Objects($nested);

        $array = $objects->toArray($nested);
        $this->assertIsArray($array);
        $this->assertIsArray($array[0]);
    }

    /** @test */
    public function it_can_convert_array_to_nested_objects(){

        $nested = (object) [(object) ['id' => 1, 'obj' => (object) ['id' => 1]], (object) ['id' => 2]];
        $objects = new Objects($nested);

        $array = $objects->toArray($nested);
        $objects = $objects->toObjects($array);
        $this->assertIsObject($objects);

    }

    /** @test */
    public function it_preserves_the_original_keys(){
        $object = (object) ['id' => 1];
        $objects = new Objects($object);

        $array = $objects->toArray($object);

        $this->assertArrayHasKey("id",$array);
    }
}
