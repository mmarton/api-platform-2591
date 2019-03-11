<?php

declare(strict_types=1);

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    /**
     * @Route("/")
     * @Template()
     */
    public function index()
    {
        return ['foo' => 'bar'];
    }
}
