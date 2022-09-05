Запуск сервера Laravel
    php artisan serve

Створення таблиць з міграцій
    php artisan migrate

// Запустить все задачи Mix ...
npm run dev

// Запустить все задачи Mix и минифицировать на выходе ...
npm run prod

Команда  продолжит работу в консоли и будет следить за изменениями во всех соответствующих файлах CSS и JavaScript.
npm run watch

допомога в описі команд:
php artisan help make:controller


робота з бд в консолі
php artisan tinker

User::all()

Добавляємо username в
- контроллер
- міграцію
- клас(модель)
потім php artisan migrate:fresh

створити контроллер
$ php artisan make:controller ProfilesController

стврити модель Profile і міграцію до неї (-m)
 php artisan make:model Profile -m
