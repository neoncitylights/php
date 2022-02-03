# 🐘 PHP Repository Template
> This template is based on my past history with developing MediaWiki software, and largely based on MediaWiki's own repository template for PHP projects.
>
> *However*, this project can be used for **any** PHP project, not just MediaWiki.
>
> I hope this template can be useful for you!

## Features
 - [x] [PHP 8.0](https://www.php.net/releases/8.0/en.php) support
 - [x] *Unit testing* with [PHPUnit](https://github.com/sebastianbergmann/phpunit/) ([official website](https://phpunit.de/))
 - [x] Static analysis tools:
   - [x] *Validates PHP syntax* with [php-parallel-lint](https://github.com/php-parallel-lint/PHP-Parallel-Lint)
   - [x] *Lint and auto-format PHP code* with [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) (PHPCS)
   - [x] *Security analysis* with [Psalm](https://github.com/vimeo/psalm) ([official website](https://psalm.dev/))
 - [x] *Continuous integration* with [GitHub Actions](https://github.com/features/actions)
   - [x] auto-generated documentation with [phpDocumentor](https://www.phpdoc.org/), [GitHub Pages](https://docs.github.com/en/pages)
 - [x] Remote development with [GitHub Codespaces](https://github.com/features/codespaces)
 - [x] Composer dependency updates auto-managed with Renovatebot

## ⚙️ Configure
 - Composer package: [`composer.json`](./composer.json) ([official docs](https://getcomposer.org/doc/04-schema.md))
 - PHPCS: [`.phpcs.xml`](./.phpcs.xml) ([official docs](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#using-a-default-configuration-file))
 - PHPUnit: [`.phpunit.xml.dist`](./.phpunit.xml.dist) ([official docs](https://phpunit.readthedocs.io/en/9.5/configuration.html))
 - PSalm: [`psalm.xml`](./psalm.xml) ([official docs](https://psalm.dev/docs/running_psalm/configuration/))
 - phpdoc: [`phpdoc.dist.xml`](./phpdoc.dist.xml) ([official docs](https://docs.phpdoc.org/3.0/guide/references/configuration.html))

## ℹ️ See also
 - [Quick start to reStructuredText](https://docutils.sourceforge.io/docs/user/rst/quickstart.html) (`.rst`), markup language used for phpDocumentor