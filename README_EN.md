## SquareBlog

This website was made for test purpose by Marc Ibi Alvarez.

## How to run

- `git clone https://github.com/softon15/square.git`
- `cd square`
- `composer install`
- Rename .env.example to .env
- Fill .env with database connection info.
- Create the database with the same name that you put into .env file.
- `php artisan migrate`
- `php artisan schedule:run` (This is for execute at least one time the automatic posts read and insert)
- `php artisan key:generate`

Now you can run `php artisan serve`. The website must be working on `http://127.0.0.1:8000`. 
If you want to auto import the posts, you only need to create a new task into the crontab. 
For example: `* * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1`
The command is configured for execute the import every 15 minutes.


## Observations

- The frontend pages (Home and Post Detail) are made with Vue.
- The backend pages (User posts and Add post) are made with Blade.
- In dashboard page, the columns Title and Date are sortable by clicking on it. I've used the following repository: https://github.com/Kyslik/column-sortable.git
- The Login and Register pages were autogenerated with the command `php artisan make:auth`.


## Comments

My only experience with Laravel was 2 years ago, and was only 1 month with Laravel 5. So probably what I did can be done better and more simply.
Also, I don't have experience in Vue. I've tried to use it in frontend pages because I think that the best option, but I know that the structure and the way to import the files are not correct.
However, I've enjoyed the experience of building this microsite with Laravel. I think Laravel is the PHP Framework with more potential, and I think that I can learn very quickly the best practises with a little help, being able to use Laravel at the same level as Symfony, which is the Framework in which I have solid experience.