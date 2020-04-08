<?php

namespace App;

class Calculator
{
    private $value1;
    private $value2;

    public function __construct(int $value1,int $value2)
    {
        if($this->isValidValue($value1) && $this->isValidValue($value2)){
            $this->value1 = $value1;
            $this->value2 = $value2;
        }
    }

    private function isValidValue(int $value) : bool
    {
        if(is_int($value))
        {
            return true;
        }
    }

    public function addition() : int
    {
        return $this->value1 + $this->value2;
    }

    public function substraction() : int
    {
        return $this->value1 - $this->value2;
    }

    public function multiplication() : int
    {
        if($this->value1 === 0 OR $this->value2 === 0) {
            throw new \Exception('Operation Forbidden : Values can not be null');
        }
        return $this->value1 * $this->value2;
    }

    public function division()
    {
        if($this->value1 === 0 OR $this->value2 === 0) {
            throw new \Exception('Operation Forbidden: Values can not be null');
        }
        return
        $this->value1 / $this->value2;
    }

}
