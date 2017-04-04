# Adminarea

**WIP: Made by a Noob ... don't use it**

This package provides simple middleware, a Gate ``` @can('admin-access)``` and a migration/ seeder


## Installation

Add these two lines to the composer.json file of your laravel installation to use the dev version of this package

```
"minimum-stability": "dev",
"prefer-stable" : true,
```

**Require the package**

```
composer require ridrog/simple-admin
```

**Include the ServiceProvider**
 
to the providers array @ config/app.php
```
'providers' => [
    ...
    Ridrog\SimpleAdmin\SimpleAdminServiceProvider::class,
    ...
 ],
```

## Usage

1. Install it
2. publish and edit config (if needed)  
    ```php artisan vendor:publish --tag=adminarea-config ```
3. Migrate  
```php artisan migrate```
4. Include der Seeder and Seed (if you want)  
``` $this->call(Ridrog\SimpleAdmin\Database\Seeds\UsersTableSeeder::class); ```  
``` php artisan db:seed ```
5. Write your routes  
    With the "admin" middleware
6. Use the gate
``` @can('admin-access)  // Your Content @endcan```


### Seed

There should be no need the edit the migration, because you can edit both (the tablename and the column) at the config file
 


You can seed two users
1. admin@admin.de : 123456 : _is an admin_
2. user@user.de : 123456 : _is no admin_

add this to your app's DatabaseSeeder.php
```
$this->call(Ridrog\Adminarea\Database\Seeds\UsersTableSeeder::class);
```

run the Seeder
```
php artisan db:seed
```
