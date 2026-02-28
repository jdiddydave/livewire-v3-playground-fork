---
name: global-helpers
description: Create or ensure a project has a global PHP helper file, register it in Composer autoload, and run dump-autoload. Use when the user asks for global helpers, app-level helper functions, or a helpers.php file.
---

# Global Helpers

## When to use

Apply this skill when:
- The user wants global helper functions available app-wide
- A helper file is needed and may not exist yet
- The user mentions "global helpers", "app helpers", or "helpers.php"

## Ability

You can **create a global helper file** if one does not exist in the project. Creating it includes:

1. **Adding the file to Composer autoload** if it is not already there
2. **Running `composer dump-autoload`** after any change to `composer.json` autoload configuration

## Workflow

### 1. Check for an existing helper file

- Look for a project helper file (common paths: `app/helpers.php`, `app/Support/helpers.php`, or a path already listed under `composer.json` → `autoload` → `files`).
- If none exists, create one (e.g. `app/helpers.php`) with a guard to avoid redeclaring functions:

```php
<?php

if (! function_exists('function_name')) {
    function function_name() {
        // ...
    }
}
```

### 2. Register in Composer

- Open `composer.json` and find the `autoload` section.
- If there is no `files` array, add one. If there is, add the new helper file path to it.
- Paths are relative to the project root (e.g. `app/helpers.php`).

**Example** — before:

```json
"autoload": {
    "psr-4": {
        "App\\": "app/"
    }
}
```

**Example** — after:

```json
"autoload": {
    "psr-4": {
        "App\\": "app/"
    },
    "files": [
        "app/helpers.php"
    ]
}
```

- Do **not** add the same file twice. Only add the helper file if it is not already listed.

### 3. Run dump-autoload

After adding or changing the `files` list in `composer.json`, run:

```bash
composer dump-autoload
```

This regenerates the autoloader so the helper file is loaded in every request.

## Summary

- Create the global helper file if it does not exist.
- Add its path to `composer.json` under `autoload.files` if not already there.
- Run `composer dump-autoload` after any autoload change.
