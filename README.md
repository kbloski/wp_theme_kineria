# Uniwersalny Edytor Motywów Potomnych WordPress (Child Theme Starter)

Uniwersalny edytor motywów potomnych WordPress z obsługą SCSS i gotowym systemem kompilacji.  
Umożliwia łatwe stylowanie dowolnego motywu nadrzędnego za pomocą jednego pliku `scss/main.scss`.

---

## ⚙️ Instalacja

### 1. Sklonuj repozytorium i zmień nazwę folderu

Skopiuj repozytorium i nadaj folderowi nazwę `[nazwa istniejącego motywu]-child`.  

📂 **Umieść ten folder w katalogu motywów WordPressa**:  
`/wp-content/themes/`  
> To jest domyślna ścieżka, w której WordPress przechowuje wszystkie zainstalowane motywy.

### 2. Zaktualizuj plik `app/src/main.css`

W pliku `app/src/main.css` motywu potomnego, zamień wartość `Template` na nazwę katalogu motywu nadrzędnego, od którego chcesz dziedziczyć.

**Przykład:**
Theme Name:     Theme Child
Template:       /* Piszemy na nazwę katalogu motywu nadrzędnego */
Version:        1.0
Author:         Kamil Błoński
Author URI:     https://github.com/kbloski
Description:    Good Life 😁
License:        GNU General Public License v2 or later
Tags:           custom, child theme


### 3. Zainstaluj zależności w aplikacji
Po sklonowaniu repozytorium, przejdź do katalogu /app i zainstaluj wymagane zależności za pomocą polecenia npm install:

```bash
cd app
npm install
```

### 4. Skonfiguruj kompilację SCSS
Po zainstalowaniu zależności, możesz uruchomić kompilację plików SCSS do CSS. Aby to zrobić, użyj jednego z poniższych poleceń:

***Aby wykonać jednorazową kompilację, użyj:***
```bash
npm run build
```

***Aby uruchomić proces monitorowania zmian w plikach SCSS (automatycznie kompilując je po każdej zmianie), użyj:***
```bash
npm run watch
```