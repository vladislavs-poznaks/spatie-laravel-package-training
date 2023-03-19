# This is my package spatie-laravel-package-training

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vladislavs-poznaks/spatie-laravel-package-training.svg?style=flat-square)](https://packagist.org/packages/vladislavs-poznaks/spatie-laravel-package-training)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/vladislavs-poznaks/spatie-laravel-package-training/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/vladislavs-poznaks/spatie-laravel-package-training/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/vladislavs-poznaks/spatie-laravel-package-training/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/vladislavs-poznaks/spatie-laravel-package-training/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/vladislavs-poznaks/spatie-laravel-package-training.svg?style=flat-square)](https://packagist.org/packages/vladislavs-poznaks/spatie-laravel-package-training)

## Installation

You can install the package via composer:

```bash
composer require vladislavs-poznaks/spatie-laravel-package-training
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="spatie-laravel-package-training-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="spatie-laravel-package-training-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="spatie-laravel-package-training-views"
```

## Usage

```php
$example = new VladislavsPoznaks\Example();
echo $example->echoPhrase('Hello, VladislavsPoznaks!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Vladislavs Poznaks](https://github.com/vladislavs-poznaks)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
