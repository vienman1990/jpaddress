<?php

use Vienman1990\JPAddress\JPAddressClass;

it('can test', function () {

    $data = JPAddressClass::find(1340084);

    expect(count($data) > 0)->toBeTrue();

    expect($data[0] == '東京都')->toBeTrue();

    expect($data[1] == '江戸川区')->toBeTrue();

    expect($data[2] == '東葛西')->toBeTrue();

});
