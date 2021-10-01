# Assignment for Laravel Developer from Companies House

## Requirments

-   PHP >= 7.4
-   NodeJs >= 14
-   Tailwindcss >= 2
-   Alpinejs 3
-   MySQL 8
-   Composer 2

## Configuration

## Step #01

Clone the git repo

```shell
git clone https://github.com/MuhammadSaim/ch-assignment.git
```

## Step #02

Step in to the directory

```shell
cd ch-assignment
```

## Step #03

Install the composer dependencies

```shell
composer install
```

## Step #04

Install the frontend dependecnies with **Yarn** or **NPM**

**Yarn**

```shell
yarn install
```

**NPM**

```shell
npm install
```

## Step #05

Copy the <kbd>.env.example</kbd> and create new file with name of <kbd>.env</kbd> or just create <kbd>.env</kbd> file and paste all the content from <kbd>.env.example</kbd> in the file.

If your in **Linux** or **Mac** or any unix or linux based Opertaing System then run this command.

```shell
cp .env.example .env
```

## Step #06

Now genereate the <kbd>APP_KEY</kbd> this will be used for sassion, cookies encryption and other securty stuff.

```shell
php artisan key:generate
```

## Step #07

Setup the Database credentials in <kbd>.env</kbd> file and fill those values.

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ch_assignment
DB_USERNAME=root
DB_PASSWORD=
```

## Step #08

Setup the stripe credentials you can get these from [Stripe Dashboard](https://dashboard.stripe.com/test/dashboard) and add in the <kbd>.env</kbd> file.

```.env
STRIPE_SECRET_KEY=
STRIPE_PUBLIC_KEY=
```

## Step #09

Run the migration with the seed. Company seeder are comming from [Top500Companies](./demo_data/top500Domains.csv) csv file after reading the file convert into array and then data will be stored into the Database.

```shell
php artisan migrate --seed
```

## Step #10

Build the frontend assets

**Development**

```shell
yarn dev
```

**Development witn watch**

```shell
yarn watch
```

**Production**

```shell
yarn prod
```

## Step #11

Run the development server

```shell
php artisan serve
```

Application is deployed now Thnaks.
