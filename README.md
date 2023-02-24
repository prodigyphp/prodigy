# Package for the Prodigy page builder.


## Installation problems
- Couldn't find migration stub
- how do we install media library?
- "blocks" directory doesn't exist.
- adding new photos should remove the old photo. since it just adds a new one, it doesn't update.
- clicking "home" to edit home on the pages list breaks because it's "//?editing=true"
- new rows need to allow content width to be not set.
- columns should default to 1. right now it's unset.

`composer require prodigyphp/prodigy`
```bash
php artisan vendor:publish --tag="prodigy-migrations"
php artisan migrate
```

```bash
php artisan vendor:publish --tag="prodigy-config"
```


[![Latest Version on Packagist](https://img.shields.io/packagist/v/prodigyphp/prodigy.svg?style=flat-square)](https://packagist.org/packages/prodigyphp/prodigy)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/prodigyphp/prodigy/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/prodigyphp/prodigy/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/prodigyphp/prodigy/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/prodigyphp/prodigy/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/prodigyphp/prodigy.svg?style=flat-square)](https://packagist.org/packages/prodigyphp/prodigy)

Prodigy is a pagebuilder specifically made for Laravel, Livewire, and Tailwind (the TALL stack). It makes building marketing pages a breeze, while staying in the same repository as your application.

## Installation

You can install the package via composer:

```bash
composer require prodigyphp/prodigy
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="prodigy-migrations"
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="prodigy-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="prodigy-views"
```

## Usage

```php
$prodigy = new ProdigyPHP\Prodigy();
echo $prodigy->echoPhrase('Hello, ProdigyPHP!');
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

- [Stephen Bateman](https://github.com/ProdigyPHP)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
