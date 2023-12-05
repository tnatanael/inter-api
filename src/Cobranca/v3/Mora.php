<?php

namespace ctodobom\APInterPHP\Cobranca\v3;

class Mora implements \JsonSerializable
{
    private $codigo = "ISENTO";
    private $taxa = 0.0;

    public const ISENTO = 'ISENTO';
    public const TAXA_MENSAL = 'TAXAMENSAL';
    public const VALOR_POR_DIA = 'VALORDIA';

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
     * @param string $codigoMora
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
