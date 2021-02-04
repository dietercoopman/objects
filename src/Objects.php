<?php namespace DieterCoopman\Objects;

use stdClass;

class Objects
{
    private $objectOrArray;

    public function __construct(stdClass|array $objectOrArray ){
        $this->objectOrArray = $objectOrArray;
    }

   public function toArray() : array
   {
        $this->objectOrArray = json_decode(json_encode($this->objectOrArray),true);
        return $this->objectOrArray;
   }

   public function toJson() : string
   {
    $this->objectOrArray =  json_encode($this->objectOrArray);
    return $this->objectOrArray;
   }

   public function toObjects() : stdClass
   {
       $this->objectOrArray = (object) json_decode(json_encode($this->objectOrArray));
       return $this->objectOrArray;
   }
}
