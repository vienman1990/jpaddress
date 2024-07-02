# search address in japan

## data
https://www.post.japanpost.jp/zipcode/dl/kogaki-zip.html

## Installation

You can install the package via composer:

```bash
composer require vienman1990/jpaddress
```

## Usage

```php
use Vienman1990\JPAddress\JPAddressClass;

$address = new  JPAddressClass::find($zipcode); // 1600000
echo $address[0] = '都道府県';
echo $address[1] = '地区';
echo $address[2] = '町';
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [vienman1990](https://github.com/Ketconma)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
