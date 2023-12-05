<?php

namespace ctodobom\APInterPHP\Cobranca\v3;

class Multa implements \JsonSerializable
{
    private $codigo = "NAOTEMMULTA";
    private $taxa = 0.0;

    public const NAO_TEM_MULTA = 'NAOTEMMULTA';
    public const VALOR_FIXO = 'VALORFIXO';
    public const PERCENTUAL = 'PERCENTUAL';
    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @return number
     */
    public function getTaxa()
    {
        return $this->taxa;
    }

    /**
     * @param string $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @param number $taxa
     */
    public function setTaxa($taxa)
    {
        $this->taxa = $taxa;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
