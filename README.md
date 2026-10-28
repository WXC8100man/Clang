# Clang MediaWiki Extension

A MediaWiki extension to add a custom `<clang>` tag for handling C programming language / Clang code.

## Features
* Adds the `<clang>...</clang>` parser tag.
* Supports modern installation via `extension.json` (Compatible with MediaWiki >= 1.39).

## How to Install via GitHub

To avoid *missing file / no such directory* errors, make sure you clone this extension into the correct directory with the exact directory name (`Clang`).

1. Open your terminal and navigate to your MediaWiki installation directory:
   ```bash
   cd /path/to/mediawiki/extensions
   ```

2. Clone this GitHub repository directly into a folder named `Clang`:
   ```bash
   git clone https://github.com/WXC8100man/Clang.git Clang
   ```
   *Important:* If the destination directory is not named `Clang` (case-sensitive), MediaWiki will encounter a fatal error because the autoloader will fail to locate the `src/Hooks.php` file.

3. Add the following line to the very bottom of your MediaWiki `LocalSettings.php` file:
   ```php
   wfLoadExtension( 'Clang' );
   ```

## Wiki Usage
Write your C program code inside the following tags on your wiki page:
```html
<clang>
#include <stdio.h>

int main() {
    printf("Hello, World!\n");
    return 0;
}
</clang>
```
