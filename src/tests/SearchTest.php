<?php

use PHPUnit\Framework\TestCase;
use Roger\DigitalCep\Search;


class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testGetFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $result = new Search();
        $result = $result->getAdressFromZipcode($input);
        $this->assertEquals($esperado, $result);
    }

    public function dadosTeste()
    {
        return [
            "Endereço Praça da Sé" => [
                "01001-000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço São Paulo" =>
            [
                "01311-000",
                [
                    "cep" => "01311-000",
                    "logradouro" => "Avenida Paulista",
                    "complemento" => "até 609 - lado ímpar",
                    "bairro" => "Bela Vista",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço Rio de Janeiro" =>
            [
                "20031-000",
                [
                    "cep" => "20031-000",
                    "logradouro" => "Avenida Almirante Barroso",
                    "complemento" => "até 54 - lado par",
                    "bairro" => "Centro",
                    "localidade" => "Rio de Janeiro",
                    "uf" => "RJ",
                    "ibge" => "3304557",
                    "gia" => "",
                    "ddd" => "21",
                    "siafi" => "6001"
                ]
            ]
        ];
    }
}