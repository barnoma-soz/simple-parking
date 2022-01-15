# Учет автомобилей на платной парковке (тестовое задание)

## Установка

Создайте SQLite базу данных

```
touch database/database.sqlite
```

Настройте подключение в файле .env

Удалите

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

и добавьте

```
DB_CONNECTION=sqlite
```

Запустите миграции

```
php artisan migrate --seed
```
