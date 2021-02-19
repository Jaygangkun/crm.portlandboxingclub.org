# sweetalert

![Screenshot](images/screenshot.png)

Provides support for the [sweetalert2 library](https://sweetalert2.github.io/), a "beautiful, responsive, customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes".

The extension is licensed under [AGPL-3.0](LICENSE.txt). sweetalert2 is available under the MIT license.

## Requirements

* PHP v7.2+
* CiviCRM 5.latest

## Installation

Install as a regular extension.

## Packaging / Updating

1. If updating the sweetalert libraries, run `npm install`.
1. Then copy `node_modules/sweetalert2/dist/sweetalert2*.css ./css` and `node_modules/sweetalert2/dist/sweetalert2*.js ./js`

## Usage

This extension does not do anything out of the box. It is available for other extensions.

## Changelog

#### 1.4

Load libraries via `civicrm_coreResourceList` hook instead of buildForm/pageRun. This allows it to work everywhere and (eg) makes it available with Stripe + drupal `webform_civicrm`.

#### 1.3

Update to SweetAlert2 version 9.17.1 - https://github.com/sweetalert2/sweetalert2/blob/master/CHANGELOG.md

#### 1.2

Load libraries in `page-header` region instead of `page-footer` so it is always available for libraries loaded in later regions.

#### 1.1

Switch to SweetAlert2 version 9.7.1 - see "Breaking Changes" at https://github.com/sweetalert2/sweetalert2/releases/tag/v9.0.0
