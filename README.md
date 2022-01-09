# 🐘 PHP Repository Template
> This template is based on my past history with developing MediaWiki software, and largely based on MediaWiki's own repository template for PHP projects.
>
> *However*, this project can be used for **any** PHP project, not just MediaWiki.
>
> I hope this template can be useful for you!

## Features
 - [x] [PHP 8.0](https://www.php.net/releases/8.0/en.php) support
 - [x] *Validates PHP syntax* with [php-parallel-lint](https://github.com/php-parallel-lint/PHP-Parallel-Lint)
 - [x] *Unit testing* with [PHPUnit](https://github.com/sebastianbergmann/phpunit/) ([official website](https://phpunit.de/))
 - [x] Static analysis tools:
   - [x] *Lint and auto-format PHP code* with [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) (PHPCS)
   - [x] *Security analysis* with [Psalm](https://github.com/vimeo/psalm) ([official website](https://psalm.dev/))

## 🚧 Roadmap
 - [ ] *Continuous integration* with [GitHub Actions](https://github.com/features/actions)
 - [ ] auto-generated documentation with [phpDocumentor](https://www.phpdoc.org/) and [GitHub Pages](https://docs.github.com/en/pages)
 - [ ] Remote development with [GitHub Codespaces](https://github.com/features/codespaces)

## Configure
 - Composer package: [`composer.json`](./composer.json) ([official docs](https://getcomposer.org/doc/04-schema.md))
 - PHPCS: [`.phpcs.xml`](./.phpcs.xml) ([official docs](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#using-a-default-configuration-file))
 - PHPUnit: [`.phpunit.xml.dist`](./.phpunit.xml.dist) ([official docs](https://phpunit.readthedocs.io/en/9.5/configuration.html))
 - PSalm: [`psalm.xml`](./psalm.xml) ([official docs](https://psalm.dev/docs/running_psalm/configuration/))
