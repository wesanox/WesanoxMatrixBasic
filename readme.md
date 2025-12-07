# Wesanox Content Matrix

WesanoxMatrixContent is a helper module for ProcessWire that automatically creates and manages a reusable Content Matrix system.
It installs required dependencies, generates fields, installs templates, and provides a ready-to-use content-only template for building flexible page layouts using RepeaterMatrix.

-----------------------------

## IMPORTANT NOTICE

Before installing WesanoxMatrixContent, you must manually install the following required helper modules:

- WesanoxHelperClasses
https://github.com/wesanox/WesanoxHelperClasses

These are necessary for field generation and automated module installation.

-----------------------------

## Module Information

The module provides:

- Automatic installation of required internal modules:
  - PageFrontEdit
- Automatic installation of external modules via ZIP download:
  - CroppableImage3
  - WesanoxFrameworkPackage
  - WesanoxHelperFields
  - WesanoxHelperClasses
- Automatic creation of:
  - Required fields for the Content Matrix
  - A reusable content-only template (template_content_only)
  - A corresponding PHP template file
- Compatibility with:
  - ProcessWire 3.0.210 or higher
  - PHP 8.0 or higher
  - FieldtypeRepeaterMatrix 0.0.9 or higher
  - WesanoxFrameworkPackage 0.0.1 or higher

-----------------------------

## Installation

### 1. Install Required Modules

Install the helper modules manually before proceeding:

```
WesanoxHelperClasses
```

### 2. Install WesanoxMatrixContent

1. Copy this module to:
/site/modules/WesanoxMatrixContent/

2. Install it through the ProcessWire backend.

During installation, the module will:

- Install all required dependencies automatically
- Create and configure the field matrix_content
- Create a template file for content_only, if missing
- Create a template named:

``` 
template_content_only
```

- Assign the correct fields (title, matrix_content)

If the template already exists, the module updates it to ensure the matrix_content field is included.

-----------------------------

## How It Works

### Content Matrix System

The module uses a RepeaterMatrix-based system to manage flexible content blocks.
It automatically loads field definitions stored in:

```
/config/fields.php
````

The resulting matrix_content field can be used in templates to build dynamic, block-based content layouts.

### Templates Generated

The module creates:

- /site/templates/template_content_only.php

The template includes:

- The title field
- The matrix_content field

This makes it ideal for "content only" pages used in headless setups, AJAX requests, or modular layouts inside larger site structures.

-----------------------------

## Uninstallation

Uninstalling the module performs a full cleanup:

- Removes generated template files
- Deletes the template_content_only template
- Removes associated fieldgroups
- Deletes the matrix_content field
- Removes all custom fields created via helper modules

This ensures that your ProcessWire installation remains clean.

-----------------------------

## External Modules Installed Automatically

The module installs the following external dependencies if they are not already present:

- CroppableImage3
https://github.com/horst-n/CroppableImage3

- WesanoxFrameworkPackage
https://github.com/wesanox/WesanoxFrameworkPackage

- WesanoxHelperFields
https://github.com/wesanox/WesanoxHelperFields

- WesanoxContentMatrix
https://github.com/wesanox/WesanoxContentMatrix

License

MIT License
(Or replace with your preferred license.)