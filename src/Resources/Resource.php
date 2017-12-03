<?php

namespace Chocoholics\Genius\Resources;

use GuzzleHttp\Client;

class Resource
{
    /**
     * Base URI
     * 
     * @var string
     */
    protected $base = 'https://api.genius.com';

    /**
     * Access Token
     * 
     * @var string
     */
    private $token;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->token = config('genius.token');

        $this->client = new Client([
            'base_uri' => $this->base,
            'headers'  => [
                'Authorization' => 'Bearer ' . $this->token
            ]
        ]);
    }
}