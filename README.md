# Cecil Composer Installer

The [Composer](https://getcomposer.org) Installer for [Cecil](https://cecil.app)'s plugins and themes.

## Usage

Add the following lines to the `composer.json` file of your theme:

```json
"require": {
  "cecil/installer": "^1.0"
}
```

### Type

```json
"type": "cecil-<type>",
```

`<type>` could be "plugin" or "theme".

### Name

```json
"extra": {
  "name": "<name>",
}
```

## License

_Cecil Composer Installer_ is a free software distributed under the terms of the MIT license.

© Arnaud Ligny
