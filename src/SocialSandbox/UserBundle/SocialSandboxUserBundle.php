<?php

namespace SocialSandbox\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SocialSandboxUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
