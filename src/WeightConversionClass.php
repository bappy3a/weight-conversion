<?php

namespace Bappy3a\WeightConversion;

class WeightConversionClass
{
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms) {}

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
<<<<<<< HEAD
=======

    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }

>>>>>>> b3985e8 (add conversion to stones)
}
