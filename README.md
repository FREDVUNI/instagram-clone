# Instagram Clone

This is an Instagram clone built using Laravel and Vue. It allows users to create accounts, post pictures, follow other users, and like and comment on posts.

## Installation

1. Clone the repository: `git clone https://github.com/your-username/instagram-clone.git`
2. Navigate to the project directory: `cd instagram-clone`
3. Install dependencies: `composer install` and `npm install`
4. Create a `.env` file by copying `.env.example` and updating the values for your local environment: `cp .env.example .env`
5. Generate an application key: `php artisan key:generate`
6. Set up your local database by updating the `DB_*` values in the `.env` file
7. Run database migrations and seeders: `php artisan migrate --seed`
8. Compile assets: `npm run dev`

## Usage

To run the application, use `php artisan serve` and navigate to `http://localhost:8000` in your browser.

You can create an account, post pictures, follow other users, and like and comment on posts.

## Technologies Used

- Laravel
- Vue
- Bootstrap

## screenshot
![instaclone](https://user-images.githubusercontent.com/41730664/236768804-8c6f4daa-ee1a-4e03-9e80-e57847dde94e.png)

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request. 

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.
