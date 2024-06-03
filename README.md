# Quotes App

I made this project because I wanted to make a website where I can store and show all the data (authors and quotes) scraped from another website.

## Installation

You must have PHP >= 7.3 already installed

1. Clone the repository `git clone https://github.com/bernardo-campos/quotes.git`
1. Copy the `.env.example` file to `.env`
1. Install dependencies `php composer.phar install`
1. Generate a key `php artisan key:generate`
1. Create a database and set the corresponding settings in the .env file
1. Run the migrations `php artisan migrate`
1. Run the app `php artisan serve`

(Optional):

* Create a link to storage path `php artisan storage:link`
* Insert dummy data `php artisan db:seed --class=AuthorAndQuoteSeeder`
