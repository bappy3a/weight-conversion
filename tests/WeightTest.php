<?php

use \Bappy3a\WeightConversion\WeightConversionClass;

it('can convert kilograms to pounds', function () {
    $pounds =  WeightConversionClass::kilograms(100)->toPounds();


    expect($pounds)->toEqual(220.46);
});
