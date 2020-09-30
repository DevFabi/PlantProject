<?php
namespace App\Services\ApiUploader;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract  class AbstractApiUploader implements ApiUploaderInterface
{
    protected $token;
    protected $url;
    /**
     * @var HttpClientInterface
     */
    protected $client;
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(string $url, string $token, HttpClientInterface $client, EntityManagerInterface $em)
    {
        $this->url = $url;
        $this->token = $token;
        $this->client = $client;
        $this->em = $em;
    }

    public function createUrl($url, $data): string
    {
        return sprintf('%stoken=%s&%s', $this->url.$url,  $this->token, http_build_query($data));
    }


}