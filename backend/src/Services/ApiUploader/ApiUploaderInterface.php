<?php


namespace App\Services\ApiUploader;


interface ApiUploaderInterface
{

    public function searchByKeyword($search);
    public function searchByFamily($search);
    public function displayAll();

}