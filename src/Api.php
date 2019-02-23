<?php

namespace Defro\FanArt;


use GuzzleHttp\Client;

class Api
{
    private const BASE_URL = 'http://webservice.fanart.tv/v3/';

    public const KEY_CD_ART = 'moviedisc';

    public const KEY_BANNER = 'moviebanner';

    public const KEY_HD_CLEAR_ART = 'hdmovieclearart';

    public const KEY_HD_CLEAR_LOGO = 'hdmovielogo';

    public const KEY_MOVIE_THUMBS = 'moviethumb';

    public const KEY_CLEAR_LOGO = 'movielogo';

    public const KEY_POSTER = 'movieposter';

    public const KEY_BACKGROUND = 'moviebackground';

    public const KEY_CLEAR_ART = 'movieart';

    /**
     * @var Client $client
     */
    private $client;

    /**
     * @var string $apiKey
     */
    private $apiKey;


    /**
     * Api constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getMovieImages(int $tmdbId)
    {
        return $this->callApi('movies/' . $tmdbId);
    }

    private function callApi(string $scope)
    {
        $uri = self::BASE_URL . $scope . '?' . http_build_query(['api_key' => $this->apiKey]);

        $response = $this->client->request('GET', $uri);

        if (200 !== $response->getStatusCode()) {
            throw new \RuntimeException(sprintf(
                'Bad status code %d returned when called uri %s', $response->getStatusCode(), $uri
            ));
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}