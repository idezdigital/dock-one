<?php

namespace Idez\DockOne\Data;

readonly class CardSetting
{
    public function __construct(
        public bool $ecommerce = true,
        public bool $international = true,
        public bool $stripe = false,
        public bool $wallet = true,
        public bool $withdrawal = true,
        public bool $contactless = true,
    ) {}
}