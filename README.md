# Genius

This package was cloned from Joe Dawson's package which may be found at https://github.com/JoeDawson/genius.

This package was made to fetch data from the Genius API, this is very much still a work in progress. If you plan on relying on this to fetch information from their API using this package, we would recommend **not** using this package for now.

## Installation

Firstly you'll need to pull this in using Composer.

```
composer require chocoholics/genius
```

After you have successfully installed, add the Service Provider to your config/app.php`

```php
Chocoholics\Genius\GeniusServiceProvider::class,
```

And the following facade, also in `config/app.php`

```php
'Genius' => Chocoholics\Genius\Facades\Genius::class,
```

Now we'll go ahead and publish the `genius.php` configuration file.

```
php artisan vendor:publish --provider="Chocoholics\Genius\GeniusServiceProvider"
```

Open up the `genius.php`, you will see that you will require an access token. Create one for your API client on Genius and add it to your `env` file.

```
GENIUS_TOKEN=
```

## What does this package do?

**Currently, you can fetch a single Annotation or Song.**

The following with return a JSON response for the given annotation.

```php
$annotation = Genius::annotation(10225840)->get();
```

This is how you would fetch a song, again this will return a JSON response.

```php
$song = Genius::song(378195)->get();
```
