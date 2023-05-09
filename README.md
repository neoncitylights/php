# PHP Repository Template

> This template is based on my past history with developing MediaWiki software, and largely based on MediaWiki's own repository template for PHP projects.
>
> *However*, this project can be used for **any** PHP project, not just MediaWiki.
>
> I hope this template can be useful for you!

This repository makes it easier to develop a PHP application or library by providing a basic project structure, continuous integration (CI) configuration, and other tools.

## Features

- [x] [PHP 8.0](https://www.php.net/releases/8.0/en.php) support
- [x] *Unit testing* with [PHPUnit](https://github.com/sebastianbergmann/phpunit/) ([official website](https://phpunit.de/))
- [x] Validates PHP syntax with [php-parallel-lint](https://github.com/php-parallel-lint/PHP-Parallel-Lint)
- [x] Lint and auto-format PHP code with [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) (PHPCS)
- [x] Security analysis with [Psalm](https://github.com/vimeo/psalm) ([official website](https://psalm.dev/))
- [x] Continuous integration with [GitHub Actions](https://github.com/features/actions)
- [x] auto-generated documentation with [phpDocumentor](https://www.phpdoc.org/), [GitHub Pages](https://docs.github.com/en/pages)
- [x] Remote development with [GitHub Codespaces](https://github.com/features/codespaces)
- [x] Composer dependency updates auto-managed with Renovatebot

## Getting started

```shell
gh repo create {repo-name} --public --clone --template neoncitylights/php-template
```

## Configure

- Configure Composer package: [`composer.json`](./composer.json) • [[docs](https://getcomposer.org/doc/04-schema.md), [website](https://getcomposer.org/), [repo](https://github.com/composer/composer)]
- Configure PHPCS (formatter + linter): [`.phpcs.xml`](./.phpcs.xml) • [[docs](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#using-a-default-configuration-file), [repo](https://github.com/squizlabs/PHP_CodeSniffer)]
- Configure PHPUnit (unit testing): [`.phpunit.xml.dist`](./.phpunit.xml.dist) • [[docs](https://phpunit.readthedocs.io/en/10.1/configuration.html), [website](https://phpunit.de/), [repo](https://github.com/sebastianbergmann/phpunit)]
- Configure PSalm (security analysis): [`psalm.xml`](./psalm.xml) • [[docs](https://psalm.dev/docs/running_psalm/configuration/), [website](https://psalm.dev/), [repo](https://github.com/vimeo/psalm)]
- Configure phpdoc (documentation generator): [`phpdoc.dist.xml`](./phpdoc.dist.xml) • [[docs](https://docs.phpdoc.org/3.0/guide/references/configuration.html), [website](https://www.phpdoc.org/), [repo](https://github.com/phpdocumentor/phpdocumentor)]

## See also

- [Quick start to reStructuredText](https://docutils.sourceforge.io/docs/user/rst/quickstart.html) (`.rst`), markup language used for phpDocumentor

## License

This software is licensed under the MIT license ([`LICENSE-MIT`](./LICENSE) or <http://opensource.org/licenses/MIT>).

### Contribution

Unless you explicitly state otherwise, any contribution intentionally submitted for inclusion in the work by you, as defined in the MIT license, shall be licensed as above, without any additional terms or conditions.
