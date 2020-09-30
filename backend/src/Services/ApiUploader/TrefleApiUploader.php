<?php
declare(strict_types=1);

namespace App\Services\ApiUploader;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TrefleApiUploader extends AbstractApiUploader
{
    public function __construct(string $url, string $token, HttpClientInterface $client, EntityManagerInterface $em)
    {
        parent::__construct( $url, $token, $client, $em);
    }

    public function searchByKeyword($search)
    {
        $url = "plants/search?";
        $data = ['q' => $search];
        $finalUrl = $this->createUrl($url,$data);

        $request = $this->client->request("GET",$finalUrl);

        return $response = json_decode($request->getContent());
    }

    public function searchByFamily($search)
    {
        // TODO: Implement searchByFamily() method.
    }

    public function displayAll()
    {
        // TODO: Implement displayAll() method.
    }
}