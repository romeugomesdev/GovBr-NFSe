<?php

namespace romeugomesdev\GovbrNfse; 

class EmitirNfse
{
    private $xml;
    private $municipio;
    private $municipios = array(
        '3304557' => array(
            'uf_ibge'=>33,
            'uf'=>'RJ',
            'nome'=>'Rio de Janeiro'
        )
        );

    public function __construct ($xml, $municipio)
    {
        $this->xml = $xml;
        if(!in_array($municipio,array_keys($municipios),false)) {
            throw new Exception("Municipio não atendido");
        }
        $this->municipio = $municipio;
    }

    public function gerar()
    {
        return "NFSe processada com sucesso!";
    }
}