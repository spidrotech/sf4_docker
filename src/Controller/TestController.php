<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    /**
     * @Route("/album", name="post_album")
     */
    public function post()
    {
        return new JsonResponse(
            [
                'status' => 'ok',
            ],
            JsonResponse::HTTP_CREATED
        );
    }
}
