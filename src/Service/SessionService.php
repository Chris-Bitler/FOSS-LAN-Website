<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Class for generating sessions for testing.
 * @author Christopher Bitler
 */
class SessionService
{
    public function getNewSession()
    {
        return new Session();
    }
}