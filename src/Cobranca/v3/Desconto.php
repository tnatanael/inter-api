<?php

namespace ctodobom\APInterPHP\Cobranca\v3;

class Desconto implements \JsonSerializable
{
    private $codigo = "PERCENTUALDATAINFORMADA";
    private $taxa = 0.0;
    private $quantidadeDias = 0;

    public const NAO_TEM_DESCONTO = 'NAOTEMDESCONTO';
    public const VALOR_FIXO = 'VALORFIXODATAINFORMADA';
    public const PERCENTUAL_FIXO = 'PERCENTUALDATAINFORMADA';
    public const VALOR_DIA_CORRIDO = 'VALORANTECIPACAODIACORRIDO';
    public const VALOR_DIA_UTIL = 'VALORANTECIPACAODIAUTIL';
    public const PERCENTUAL_DIA_CORRIDO = 'PERCENTUALVALORNOMINALDIACORRIDO';
    public const PERCENTUAL_DIA_UTIL = 'PERCENTUALVALORNOMINALDIAUTIL';

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
     * @return number
     */
    public function getQuantidadeDias()
    {
        return $this->quantidadeDias;
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

    /**
     * @param number $valor
     */
    public function setQuantidadeDias($dias)
    {
        $this->quantidadeDias = $dias;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
