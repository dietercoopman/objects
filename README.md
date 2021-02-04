
![Tests](https://github.com/dietercoopman/objects/workflows/tests/badge.svg)
![Downloads](https://img.shields.io/packagist/dt/dietercoopman/objects.svg?style=flat-square)

# Objects

package to transform objects to arrays and vice versa , this package tackles the problem of converting nested objects to a multidimensional array.

## Examples

Convert an array of objects to array

```php
$object = [(object) ['id' => 10],(object) ['id' => 10],(object) ['id' => 10]];
$obj = new Objects($object);
$array = $obj->toArray();
```

Convert nested arrays to nested objects

```php
$array =  [['id' => 10],['id' => 10],['id' => 10]];
$obj = new Objects($array);
$objects = $obj->toObjects();
```

## Installation

You can install the package via composer:

```bash
composer require dietercoopman/objects
```
