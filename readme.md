# Steamroller by ![Flagrow logo](https://avatars0.githubusercontent.com/u/16413865?v=3&s=20) [Flagrow](https://discuss.flarum.org/d/1832-flagrow-extension-developer-group), a project of [Gravure](https://gravure.io/)

[![MIT license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/flagrow/steamroller/blob/master/LICENSE.md) [![Latest Stable Version](https://img.shields.io/packagist/v/flagrow/steamroller.svg)](https://packagist.org/packages/flagrow/steamroller) [![Total Downloads](https://img.shields.io/packagist/dt/flagrow/steamroller.svg)](https://packagist.org/packages/flagrow/steamroller) [![Donate](https://img.shields.io/badge/patreon-support-yellow.svg)](https://www.patreon.com/flagrow) [![Join our Discord server](https://discordapp.com/api/guilds/240489109041315840/embed.png)](https://flagrow.io/join-discord)

Because you can't extend the default Flarum console commands, this package adds an alternate `php vendor/bin/flagrow` command that uses events to register new commands.

## Install

Add to the composer.json of your extension:

```json
  "require-dev": {
    "flagrow/steamroller": "*"
  }
```

## Usage

First, set up a phpunit.xml.

Make sure your tests extend the `Flagrow\Steamroller\TestCase`.

To run tests locally, use:

```bash
vendor/bin/phpunit
```

Example implementations:

- [flagrow bazaar](https://github.com/flagrow/bazaar)
- [flagrow upload](https://github.com/flagrow/upload)

## Support our work

We prefer to keep our work available to everyone.
In order to do so we rely on voluntary contributions on [Patreon](https://www.patreon.com/flagrow).

## Security

If you discover a security vulnerability within Steamroller, please send an email to the Gravure team at security@gravure.io. All security vulnerabilities will be promptly addressed.

Please include as many details as possible. You can use `php flarum info` to get the PHP, Flarum and extension versions installed.

## Links

- [Source code on GitHub](https://github.com/flagrow/steamroller)
- [Report an issue](https://github.com/flagrow/steamroller/issues)
- [Download via Packagist](https://packagist.org/packages/flagrow/steamroller)

An extension by [Flagrow](https://flagrow.io/), a project of [Gravure](https://gravure.io/).
