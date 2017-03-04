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
}