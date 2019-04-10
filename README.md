# FanArt TV API

[![Latest Version](https://img.shields.io/github/release/defro/fanart-api.svg?style=flat-square)](https://github.com/defro/fanart-api/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/5d86f539-e1f9-4eb1-9c70-907a68aa8e9b.svg?style=flat-square)](https://insight.sensiolabs.com/projects/5d86f539-e1f9-4eb1-9c70-907a68aa8e9b)
[![Total Downloads](https://img.shields.io/packagist/dt/defro/fanart-api.svg?style=flat-square)](https://packagist.org/packages/defro/fanart-api)

This package can get move, tv series, music image from [fanart.tv](https://fanart.tv). Here's a quick example:

```php
$client = new \GuzzleHttp\Client();
$fanArt = new Defro\FanArt\Api($client);
$images = $fanArt
    ->setApiKey('YOUR_FANART_API_KEY')
    ->getMovieImages(857) // The Movie DB ID of Saving Private Ryan
;
```

## Documentation

Read to install, use this package, customize image to display on [documentation page](https://defro.github.io/fanart-api/).


## License

The MIT License (MIT). Please see [license file](LICENSE) for more information.
