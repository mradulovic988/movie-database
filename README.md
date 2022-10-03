## Movie Database Application

Fetching all movies, tv shows and actors from: [TMDB REST API.](https://www.themoviedb.org/documentation/api)

### Demo: Soon

### Used packages:
1. [Livewire](https://laravel-livewire.com/)
2. [View Models](https://github.com/spatie/laravel-view-models)
3. [Tailwind CSS](https://tailwindcss.com/)
4. [AlpineJS](https://alpinejs.dev/)

### To clone this project:
1. Clone Github repo:
   1. `git clone https://github.com/mradulovic988/movie-database.git`
   2. `cd <into project>`
2. Configure the database
    1. Run the migration
        1. `php artisan migrate`
3. Set the API token in .env file with name `TMDB_TOKEN`
   1. Create account on [TMDB](https://www.themoviedb.org/)
   2. Set the [API Key](https://www.themoviedb.org/settings/api)
4. Generate APP key
    1. `php artisan key:generate`
5. Install NPM 
   1. `npm install && npm run dev`
6. Install and configure TailwindCSS
   1. `npm install -D tailwindcss postcss autoprefixer`
   2. `npx tailwindcss init -p`
   3. Configure template paths
   4. Add directive to CSS:
      1. `@tailwind base;`
      2. `@tailwind components;`
      3. `@tailwind utilities;`
      4. `npm run dev`
7. Install Livewire:
   1. `composer require livewire/livewire`
   2. Include the assets
      1. `@livewireStyles`
      2. `@livewireScripts`
   3. Publish config file (optional)
      1. `php artisan livewire:publish --config`
8. Install Spatie View Models package
   1. `composer require spatie/laravel-view-models`


<small>Author: Marko Radulovic</small><br>
<small>Email: mradulovic988@gmail.com</small>