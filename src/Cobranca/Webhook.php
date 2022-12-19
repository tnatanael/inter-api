<?php

namespace ctodobom\APInterPHP\Cobranca;

class Webhook implements \JsonSerializable
{
    private $webhookUrl = null;
    private $razao = '';
    

    public function getWebhookUrl()
    {
        return $this->webhookUrl;
    }

    public function setWebhookUrl($webhookUrl)
    {
        $this->webhookUrl = $webhookUrl;
    }

    public function getRazao()
    {
        return $this->razao;
    }

    public function setRazao($msg)
    {
        $this->razao = $msg;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
