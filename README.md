## pytania rekrutacyjne od firmy Eko Okna
### Krok 1: Sklonuj repozytorium

Aby sklonować to repozytorium, wykonaj poniższą komendę w terminalu:
```
git clone https://github.com/Gharib84/eko-okna.git

```
### Krok 2: Sklonuj repozytorium
przejdź do folderu projektu.
```
cd eko-okna
```
### Krok 3:  zainstalowanie zależności Composera w katalogu głównym projektu
```
composer install
```
### Krok 4: 
```
cp .env.example .env
```
### Krok 5:
```
php artisan key:generate
```
### Krok 6: Przejdź do pliku .env i wprowadź poniższy kod
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Magazyn
DB_USERNAME=root
DB_PASSWORD=
```
### Krok 7: Uruchom migracje.
```
php artisan migrate
```
### krok 8: Przeprowadź seedowanie bazy danych
```
php artisan db:seed --class=UsersTableSeeder

```
### Krok 9: Uruchomienie npm install
```
npm install

```
### Krok 10: Uruchomienie npm run dev
```
npm run dev

```

### Krok 11: Uruchomienie php artisan serve
```
php artisan serve

```

### Krok 12: Logowanie admina przez email.
```
admin@ekookna.pl

```

### Krok 13: Podaj hasło
```
admin1234

```
:smiley: Enjoy !

