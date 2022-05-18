<br>
<p align="center"><img src="public/img/brand-light.png" alt="Acehgram Logo" width="300"></p>
<br>
## About Acehgram
<p>Acehgram is a web application that allows people to share their photo of their best moment in life with other people. And other people can see it</p>

## Installation

1. clone the repository

```bash
git clone https://github.com/frisrsyd/Acehgram-PBW
```

2. go to folder and run

```bash
composer install
```

```bash
composer update
```

3. migrate the table

Create an application encryption key:

Create an empty database and fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` fields in the `.env` file to match the credentials of your newly created database.

following the .env file, change `DB_DATABASE = acehgram`, so make the empty database name is `acehgram`

Run the migrations:

```sh
php artisan migrate
```

4. run serve with

```bash
php artisan serve
```

## Contact info

if any problem contact whatsapp

```bash
https://api.whatsapp.com/send?phone=6285261297134
```
