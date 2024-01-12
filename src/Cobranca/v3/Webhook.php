<?php

namespace ctodobom\APInterPHP\Cobranca\v3;

class Webhook implements \JsonSerializable
{
    private $webhookUrl = null;   

    public function getWebhookUrl()
    {
        return $this->webhookUrl;
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
