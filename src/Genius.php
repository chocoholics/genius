<?php

namespace Dawson\Genius;

class Genius
{
    /**
     * Annotations
     * 
     * @param  integer $id
     * @param  string $format
     * @return mixed
     */
    public function annotations($id, $format = 'dom')
    {
        return new Resources\Annotations($id, $format);
    }

    /**
     * Songs
     * 
     * @param  integer $id
     * @param  string $format
     * @return mixed
     */
    public function songs($id, $format = 'dom')
    {
        return new Resources\Songs($id, $format);
    }
}