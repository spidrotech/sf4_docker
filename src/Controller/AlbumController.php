<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AlbumController extends AbstractController
{
    /**
     * @Route("/album", name="album")
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
