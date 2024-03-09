<?php

namespace Idez\DockOne\Data;

readonly class Address
{
    public function __construct(
        public string $id,
        public string $city,
        public string $complement,
        public string $country,
        public string $district,
        public string $number,
        public string $state,
        public string $street,
        public string $zipCode
    ) {}
}