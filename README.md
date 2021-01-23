# Laravel Vue Intranet

_Intranet system to automate processes, show information, manage users and permissions._

### Project goal by martin-stepwolf :goal_net:

Personal project to show the skills I developed in my internship by building a similar project and improve it with other courses and better practices. 

### Achievements :star2:

As web developer, I knew already about PHP vanilla, Vue, databases, etc.
The challenge was create a professional project, where I achieved.

- Create databases, default and fake data with migrations, seeders and factories.
- Learn about MVC pattern and better practices.
- Create dynamic pages with Vue (JavaScript) using Axios as HTTP client.
- Manage the security, views, routes, model, controllers, etc as Laravel works.
- Use third party packages like vue-json-csv, vue-sweetalert2 and vue2-datepicker.

Then I take some courses and I improve the project with:

- Fix an admin template, where styles and some html elements are defined.
- Optimize some views by getting the data in the view(not by HTTP client).
- Backend validation in the request (app/Http/Request).
- Dynamic views with slug in the url.
- Cleaning and optimizing the code.
- Implement docker and docker compose for a better environment.

## Getting Started :rocket:

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites :clipboard:

The programs you need are:

-   [Docker](https://www.docker.com/get-started).
-   [Docker compose](https://docs.docker.com/compose/install/).

### Installing 🔧

First duplicate the file .env.example as .env.

```
cp .env.example .env
```

Note: You could change some values, anyway docker-compose create the database according to the defined values.

Create the image and run the environment (php, nginx, mysql and its configurations):

```
docker-compose up
```

Note: The image created (php:7.4-lvintranet) has the PHP and Javascript dependences. 

Then generate the application key.

```
docker-compose exec app php artisan key:generate
```

Finally generate the database with fake data:

```
docker-compose exec app php artisan migrate --seed
```

Note: You could refresh the database any time with migrate:refresh.

## Running the project :computer:

Each time SASS and JavaScript files are updated you need to run:

```
docker-compose exec app npm run dev
```

To make it automated run:

```
docker-compose exec app npm run watch
```

And now you have all the environment, to open the website open the port 8000 in your local (e.g http://127.0.0.1:8000/).

## Deployment 📦

For production environment you need extra configurations for optimization and security as:

Generate optimized JavaScript files.

```
docker-compose exec app npm run production
```

Set in the file .env the next configuration.

```
APP_ENV=production
```

## Built With 🛠️

-   [PHP 7.4](https://www.php.net/releases/7_4_0.php) - Backend language.
-   [Laravel 7](https://laravel.com/docs/7.x/releases/) - PHP framework.
-   [Vue 2](https://vuejs.org/) - JavaScript framework.
-   [Bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/) - CSS framework.
-   [SASS](https://sass-lang.com/) - CSS preprocessor. 
-   [SB Admin 2](https://startbootstrap.com/themes/sb-admin-2/) - Admin theme.

## Authors

-   Martín Campos [martin-stepwolf](https://github.com/martin-stepwolf)

## Contributing

You're free to contribute to this project by submitting [issues](https://github.com/martin-stepwolf/laravel-vue-intranet/issues) and/or [pull requests](https://github.com/martin-stepwolf/laravel-vue-intranet/pulls).

## License

This project is licensed under the [MIT License](https://choosealicense.com/licenses/mit/).

## References :books:

- [Tutorial Laravel with Docker Compose](https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-20-04)
- [Docker course](https://platzi.com/clases/docker/)
- [SASS course](https://platzi.com/clases/sass/)
- [PHP with Laravel](https://platzi.com/clases/curso-php-laravel/)
- [Vue.js basic course](https://platzi.com/clases/vuejs/)
- [Laravel introduction course](https://platzi.com/clases/curso-php-laravel/)
