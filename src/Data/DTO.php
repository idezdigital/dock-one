<?php

namespace Idez\DockOne\Data;

use Illuminate\Contracts\Support\Arrayable;

readonly abstract class DTO implements Arrayable
{
    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public static function fromArray(array $data): static
    {
        return new static(...array_values($data));
    }
}