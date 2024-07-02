<?php

namespace Vienman1990\JPAddress;

class JPAddressClass
{
    public static function find(string $postcode)
    {
        try {

            if (strlen($postcode) !== 7) {
                return false;
            }

            $data = self::getData();

            if (count($data) == 0) {
                return false;
            }

            return $data[$postcode] ?? false;

        } catch (\Throwable $th) {
            return false;
        }
    }

    public static function getData()
    {
        try {
            $file = file_get_contents(__DIR__.'/data.json');

            return json_decode($file, true);
        } catch (\Throwable $th) {
            return [];
        }
    }
}
