# Bloomsday Wheelers Registration Application

This is a web application that serves as a registration management tool for the elite [Bloomsday Wheelchair division](http://bloomsdaywheelers.org).

## Technical Stack

* [Laravel 5.2](https://laravel.com/docs/5.2)
* [LaravelCollective 5.2 HTML Package](https://laravelcollective.com/docs/5.2/html)
* [Bootstrap 3.3.6](http://getbootstrap.com/getting-started/)

## Getting Started (Homestead Instructions)

1. Install [Laravel Homestead](https://laravel.com/docs/5.2/homestead#installation-and-setup)
2. Clone this repository
3. Configure Homestead to point to the repo's `public` directory (`homestead edit` or edit `~/.homestead/Homestead.yaml`):

  ```
  folders:
    - map: ~/path/to/repo/bloomsdaywheelers
      to: /home/vagrant/bloomsdaywheelers
  ```
  ...
  ```
  sites:
    - map: bloomsdaywheelers.local
      to: /home/vagrant/bloomsdaywheelers
  ```
  ...
  ```
  databases:
    - bloomsdaywheelers
  ```

4. Update your machine's `hosts` file with (default IP for Homestead's Vagrant VM is `192.168.10.10`):

  ```
  192.168.10.10   bloomsdaywheelers.local
  ```

5. SSH into Homestead (`homestead ssh`) and navigate to the project's root directory (defined in step 3)
6. Run `composer install`
7. Clone the `.env.example` file and name it `.env`
8. `php artisan key:generate` to create the unique `APP_KEY` security key
9. Run `php artisan migrate --seed` to setup the database schema and seed with data (country list)
10. Navigation to [http://bloomsdaywheelers.local/](http://bloomsdaywheelers.local/)
