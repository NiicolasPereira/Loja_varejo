<?php

namespace APP\Model;

class Provider
{
    private string $cnpj;
    private string $providerName;
    private ?Address $address;

    public function __construct(string $cnpj, string $providerName, Address $address = null)
    {
        $this->cnpj = $cnpj;
        $this->providerName = $providerName;
        $this->address = $address;

    }
}
