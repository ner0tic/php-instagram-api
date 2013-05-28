php-instagram-api
==================

ORM agnostic php library to access instagram api

Installation
=============
Add to composer
```js
    "require": {
        "ner0tic/php-api-core":     "2.0.0",
        "ner0tic/php-instagram-api":   "*"
        // ...
```
Create your config file `app/config/instagram.yml`
```yaml
url_client_id: XXXXXXXx
url_token: XXXXXXXx
http_password: XXXXXXXXXXX
```

Usage
=============
```php
$ig = new \Instagram\Client();

$photos = $ig->api('User')->recentMedia(); // recentMedia(array $options)

foreach($photos as $photo) {
  echo $photo // $photo->caption.' '.$photo->getLink()
}
```
Api's to choose from:
- user
- relationships
- media
- comments
- likes
- tags
- locations
- geographies

To set the auth settings manually
```php
$ig = new \Instagram\Client();

$ig->setAuthClientId($id);
$ig->setAuthHttpPassword($pass);
$ig->setAuthUrlToken($token);
$ig->setAuthHttpToken($token);
```

If you have api keys to use, mash them into a [pem](http://www.fileinfo.com/extension/pem) file and 
set the `certificate` option to the path  of the file.
```php
$client->setOption('certificate', $pem_file);
```

Make a query
```php
$result = $api->get($endpoint, $parameters, $request_options);
```
ToDo
=================
Laundry List
- DI to access config.yml for variables

