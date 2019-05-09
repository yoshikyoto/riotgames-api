<?php

namespace Yoshikyoto\Riotgames\Value;

abstract class Value
{
    protected $value;

    public function getValue()
    {
        return $this->value;
    }
}
