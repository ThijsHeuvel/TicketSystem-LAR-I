
# TicketSystem




## Developers

- [Sven](https://github.com/MiracleSven)
- [Thijs](https://github.com/ThijsHeuvel)
- [Kelvin](https://github.com/KelvinAarssen36)
- [Martijn](https://github.com/MartijnCurio)



## Download/Configuring

1. Fork the given repository or download it.
2. Clone your copy of the repository.
3. Go to your repository folder. Copy the file “.env.example” to “.env”
4. Open your entire folder in Visual Studio Code. Open the “.env” file. 
5. Check the values ​​for DB_USERNAME and DB_PASSWORD. Do not enter anything at DB_DATABASE, unless you had already created an empty database for this app.

## Installation/Running the repository

Open a terminal in VS Code and execute the following commands in succession:
1. composer install (this will cause Composer to install all necessary packages)
2. php artisan key:generate(this creates an encryption key)
3. php artisan migrate(this creates the tables)i.Note: If there is no database, laravel will ask if you want to create one. Then type "yes" and press enter
4. npm install (this will install packages that are needed for the front-end) 
5. npm run dev (this will make npm compile all CSS and JavaScript files)
6. php artisan serve (then you can open the website at: http://127.0.0.1:8000/)




