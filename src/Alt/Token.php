<?php

namespace PDFfiller\OAuth2\Client\Provider\Alt;


use PDFfiller\OAuth2\Client\Provider\Core\Model;

class Token extends Model
{

    protected static $entityUri = 'token';

    public function attributes()
    {
        return [];
    }
}