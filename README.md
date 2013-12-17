# Advanced Custom Fields: Auto Export

- Contributors: tom.maitland (@TomMaitland)
- Tags: fields, meta, acf, advanced custom fields, export
- Requires at least: 3.6.0
- Tested up to: 3.8
- Stable tag: 0.1
- License: GPLv2 or later
- License URI: http://www.gnu.org/licenses/gpl-2.0.html

Advanced Custom Fields: Auto Export automatically exports all fields to PHP on save or update, and reads them from PHP when set.

## Description

ACF Auto Export automates ACF's export to PHP process. It saves site fields inside the plugin, with an option to automatically read from PHP on a production site.

**NOTE: ACF Auto Export hasn't been thoroughly tested, it is still rough and make sure you have database backups.**

## Installation

Install the plugin through the 'Plugins' menu in WordPress, or by downloading the ZIP and following these instructions:

1. Download and extract the plugin files
2. Upload the `acf-auto-export` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Configure the plugin from the 'Auto Export' option in the 'Custom Fields' menu

## Contibuting

ACF Auto Export is still in alpha. Suggestions and pull requests very welcome.

## Frequently Asked Questions

#### What is the best process for auto-export?

ACF Auto Export allows you to easily sync up ACF changes between a development and staging/production server. Enable the plugin on all sites, on development maintain your database copies and update fields there. Move the database copies on staging/production to 'Draft' and select 'Use PHP Fields' in the 'Auto Export' page under 'Custom Fields'.

#### I'm losing fields, or seeing double fields. Why?

You still have active database copies of the fields you're trying to read in from PHP. Disable the 'Use PHP' option and unpublish your legacy database fields.


## Changelog

#### 0.1
* Initial release