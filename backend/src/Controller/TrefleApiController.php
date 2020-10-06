<?php

namespace App\Controller;

use App\Services\ApiUploader\TrefleApiUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TrefleApiController extends AbstractController
{
    /**
     * @var TrefleApiUploader
     */
    private $uploader;

    public function __construct(TrefleApiUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    /**
     * @Route("/api_trefle/search", name="trefle_api", methods={"POST"})
     **/
    public function searchByKeyword(Request $request): JsonResponse
    {
        $searchKeyword = json_decode($request->getContent(), true);

        $result = $this->uploader->searchByKeyword($searchKeyword["keyword"]);

        return new JsonResponse($result);
    }
}
