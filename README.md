# Currency

Aplikacja dotycząca zadania rekrutacyjnego firmy Inovation Software.

# Rekomendowane wymagania

NGINX 1.21.6, PHP 8.1, MYSQL 8.29, Composer 2.2.9.

# Instalacja i uruchomienie

1. Pobranie repozytorium:

```bash
git clone https://github.com/devkacper/currency.git
```

2. Instalacja pakietów composer:

```bash
composer install
```

3. Przekopiowanie pliku .env-example do .env  i uzupełnienie ustawień według lokalnej konfiguracji serwera i bazy danych.


4. Uruchomienie migracji:
```bash
php artisan migrate
```

5. Wygenerowanie klucza i katalogu storage:

```bash
php artisan key:generate
php artisan storage:link
```

6. Start aplikacji:
```bash
php artisan serve
```

