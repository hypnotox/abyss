# hypnotox/abyss

![CI Status](https://github.com/hypnotox/abyss/actions/workflows/ci.yml/badge.svg)
[![Code Coverage](https://codecov.io/gh/hypnotox/abyss/branch/main/graph/badge.svg)](https://codecov.io/gh/hypnotox/abyss)
[![Packagist Version](https://img.shields.io/packagist/v/hypnotox/abyss)](https://packagist.org/packages/hypnotox/abyss)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/hypnotox/abyss)](https://packagist.org/packages/hypnotox/abyss)
[![GitHub](https://img.shields.io/github/license/hypnotox/abyss)](/LICENSE.md)

A PHP package implementing array to object schema validation and mapping. *\(The idea of this package has changed a bit and might change again in the future\)*

### The package is currently not in any usable / stable state, but is in active development towards a target. It will be tagged as soon as base functionality is present and tested.

**This package is very experimental and can change very much pre version 1.0!**

This is just a personal project, but follows semantic versioning and will be stable once reaching its first major release.

PRs are welcome.

## Target constraints

- Type constraint
  - Scalars
    - [ ] int, string, float, bool
  - Array \(I'm currently unsure if `\Traversable` should be allowed\)
    - [ ] list\<T\>
    - [ ] map\<K, T\>
  - Objects
    - [ ] instanceof T
- Value constraint
  - Scalar
    - Numeric
      - [ ] equal to / inside bounds
    - String
      - [ ] equal to
      - [ ] regex
    - [ ] Enum
  - Array
    - [ ] size equal to / inside bounds
    - [ ] nested array
- [ ] Object shape constraint
- [ ] Custom constraints

## Installation

Simply require it using composer: `composer require hypnotox/abyss`

## Features

// TODO

## Usage

// TODO
