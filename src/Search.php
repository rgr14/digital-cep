<?php

namespace Roger\DigitalCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function __construct()
    {
        echo 'Search';
    }

    public function getAdressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);
    }
}
