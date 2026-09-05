---
paths:
  - rector.php
---

# General

## Rector 2.x setup quirks
Rector 2.x removed the `init` command. Run bare `vendor/bin/rector.bat` (Windows, use the .bat) to get the interactive config generator, or write `rector.php` by hand. The canonical Laravel package is `driftingly/rector-laravel`; `rector/rector-laravel` is an abandoned alias that installs duplicates and causes ambiguous classmap warnings.
