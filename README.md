# BigCommerce Technical Assignment


## Setup

This application uses the [Laravel framework](https://laravel.com/docs/5.6) which requires PHP >= 7.1 to run. If you do
not already have PHP available on your machine, we suggest you use [Homebrew](https://brew.sh/) to install it:
```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
brew install php
brew install php72-xdebug
```

You will also need to install [Composer](https://getcomposer.org/download/). Once setup, install dependencies:
```
composer install
```


## API Client

The [Bigcommerce PHP API](https://github.com/bigcommerce/bigcommerce-api-php) client is already installed as a
dependency and automatically initialised using the relevant fields in the `.env` file (see `AppServiceProvider::boot`).
When working correctly, you will see the store's time appear on the homepage. For instructions on accessing resources
using the API client, refer to the GitHub repository.


## Developing

To serve the application:
```
php -S localhost:8000 -t public
```                               

To run the unit tests:
```
./vendor/bin/phpunit
```

## Details

I've decided to use the Adapter pattern.
Reason being that the BigCommerce API can change at any moment and we want the application to be completely dependent on the actual API.
