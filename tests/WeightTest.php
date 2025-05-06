<?php

use Bappy3a\WeightConversion\WeightConversionClass;

it('can convert kilograms to pounds', function () {
    $pounds =  WeightConversionClass::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});

it('can convert kilograms to stones', function () {
    $pounds =  WeightConversionClass::kilograms(100)->toStones();

    expect($pounds)->toEqual(15.747);
});
