<?php
namespace Lib;

class CountTag extends Base
{
    /**
     * @return int
     */
    public function exec(): int
    {
        $content = $this->getContent();
        return (int)preg_match_all('/<([^\/!][a-z1-9]*)/i', $content, $matches);
    }
}