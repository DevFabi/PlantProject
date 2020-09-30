<?php

namespace App\Command;

use App\Services\ApiUploader\TrefleApiUploader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiTrefleCommand extends Command
{
    protected static $defaultName = 'app:api-trefle';

    private $httpClient;
    private $uploader;

    public function __construct(HttpClientInterface $httpClient, TrefleApiUploader $uploader)
    {
        parent::__construct();
        $this->httpClient = $httpClient;
        $this->uploader = $uploader;
    }

    protected function configure()
    {
        $this
            ->setDescription('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->uploader->searchByKeyword('caladium');

        return Command::SUCCESS;
    }
}
