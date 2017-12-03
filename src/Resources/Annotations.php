<?php

namespace Chocoholics\Genius\Resources;

use GuzzleHttp\Exception\ClientException;
use Chocoholics\Genius\GeniusException;

class Annotations extends Resource
{
    /**
     * Resource ID
     * 
     * @var integer
     */
    protected $id;

    /**
     * Resource Format
     * 
     * @var string
     */
    protected $format;

    /**
     * Constructor
     */
    public function __construct($id, $format)
    {
        parent::__construct();

        $this->id = $id;
        $this->format = $format;
    }

    /**
     * Get the Resource
     * 
     * @return mixed
     */
    public function get()
    {
        try {
            return json_decode(
                $this->client
                     ->get('annotations/' . $this->id . '?text_format=' . $this->format)
                     ->getBody()
            );
        } catch(ClientException $e) {
            throw new GeniusException($e);
        }
    }
}