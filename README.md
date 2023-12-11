# Steps after cloning
1. After cloning, create .env file (just copy the `.env.example` and rename it to `.env`).
2. Execute the command `php artisan key:generate` to generate app key.
3. Configure the database in the `.env` file and test the command `php artisan migrate`).
4. On the terminal in the current path, execute commands `composer install` and `npm install`.
5. After doing so, run the application using the commands `npm run dev` and then execute at the same time the `php artisan serve` command on other terminal tab
