# Clang MediaWiki Extension

Ekstensi MediaWiki untuk menambahkan tag kustom `<clang>` guna menangani bahasa pemrograman C / kode Clang.

## Fitur
* Menambahkan parser tag `<clang>...</clang>`.
* Mendukung instalasi modern via `extension.json` (Kompatibel dengan MediaWiki >= 1.39).

## Cara Instalasi via GitHub

Untuk menghindari error *missing file / no such directory*, pastikan Anda mengklon ekstensi ini ke dalam direktori yang benar dengan nama direktori yang tepat (`Clang`).

1. Buka terminal dan masuk ke direktori instalasi MediaWiki Anda:
   ```bash
   cd /jalur/ke/mediawiki/extensions
   ```

2. Klon repositori GitHub ini langsung ke dalam folder bernama `Clang`:
   ```bash
   git clone https://github.com/yourusername/mediawiki-extension-Clang.git Clang
   ```
   *Penting:* Jika direktori tujuan tidak dinamai `Clang` (sensitif huruf kapital), MediaWiki akan mengalami error fatal karena kegagalan autoloader mencari file `src/Hooks.php`.

3. Tambahkan baris berikut di bagian paling bawah file `LocalSettings.php` MediaWiki Anda:
   ```php
   wfLoadExtension( 'Clang' );
   ```

## Penggunaan di Wiki
Tulis kode program C Anda di dalam tag berikut pada halaman wiki:
```html
<clang>
#include <stdio.h>

int main() {
    printf("Hello, World!\n");
    return 0;
}
</clang>
```
