# This is my package gateway

[![Latest Version on Packagist](https://img.shields.io/packagist/v/get-things-done/gateway.svg?style=flat-square)](https://packagist.org/packages/get-things-done/gateway)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/get-things-done/gateway/run-tests?label=tests)](https://github.com/get-things-done/gateway/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/get-things-done/gateway/Check%20&%20fix%20styling?label=code%20style)](https://github.com/get-things-done/gateway/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/get-things-done/gateway.svg?style=flat-square)](https://packagist.org/packages/get-things-done/gateway)

---
This repo can be used to scaffold a Laravel package. Follow these steps to get started:

1. Press the "Use template" button at the top of this repo to create a new repo with the contents of this skeleton
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files
3. Remove this block of text.
4. Have fun creating your package.
5. If you need help creating a package, consider picking up our <a href="https://laravelpackage.training">Laravel Package Training</a> video course.
---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require get-things-done/gateway
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="GetThingsDone\Gateway\GatewayServiceProvider" --tag="gateway-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="GetThingsDone\Gateway\GatewayServiceProvider" --tag="gateway-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$skeleton = new GetThingsDone\Gateway();
echo $skeleton->echoPhrase('Hello, GetThingsDone!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Cao Minh Duc](https://github.com/get-things-done)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
