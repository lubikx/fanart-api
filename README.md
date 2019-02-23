# FanArt TV API

[![Latest Version](https://img.shields.io/github/release/defro/google-streetview.svg?style=flat-square)](https://github.com/defro/google-streetview/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/defro/google-streetview/master.svg?style=flat-square)](https://travis-ci.org/defro/google-streetview)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/bb4e1360-2e06-4b1f-8c6f-57d99f2dafd9.svg?style=flat-square)](https://insight.sensiolabs.com/projects/bb4e1360-2e06-4b1f-8c6f-57d99f2dafd9)
[![StyleCI](https://styleci.io/repos/156726302/shield)](https://styleci.io/repos/156726302)
[![Total Downloads](https://img.shields.io/packagist/dt/defro/google-streetview.svg?style=flat-square)](https://packagist.org/packages/defro/google-streetview)

This package can get move, tv series, music image from [fanart.tv](https://fanart.tv). Here's a quick example:

```php
$client = new \GuzzleHttp\Client();
$fanArt = new Defro\FanArt\Api($client);
$images = $fanArt
    ->setApiKey('YOUR_FANART_API_KEY')
    ->getMovieImages(857) // Saving Private Ryan
;
```

## Documentation

Read to install, use this package, customize image to display on [documentation page](https://defro.github.io/fanart-api/).


## License

The MIT License (MIT). Please see [license file](LICENSE) for more information.
