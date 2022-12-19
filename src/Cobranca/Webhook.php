<?php

namespace ctodobom\APInterPHP\Cobranca;

class Webhook implements \JsonSerializable
{
    private $webhookUrl = null;

    public function getWebhookUrl()
    {
        return $this->dataEmissao;
    }

    public function setWebhookUrl($webhookUrl)
    {
        $this->webhookUrl = $webhookUrl;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
