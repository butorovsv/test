<?php
namespace Lib;

abstract class Base
{
    /**
     * @var string
     */
    private string $domain = '';

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return $this
     */
    public function setDomain(string $domain): self
    {
        $this->domain = $domain;
        return $this;
    }


    /**
     * @return string
     */
    public function getContent(): string
    {
        $domain = $this->domain;
        $data = file_get_contents($domain);

        return $data;
    }

    public function pd($data): void
    {
        ?><pre><? var_export($data)?></pre><?php
    }
    public function dd($data): void
    {
        ?><pre><? var_export($data)?></pre><?php
        exit();
    }
}

