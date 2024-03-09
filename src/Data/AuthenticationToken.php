<?php

namespace Idez\DockOne\Data;

readonly class AuthenticationToken extends DTO
{
    public function __construct(
        public string $access_token,
        public string $token_type,
        public int $expires_in,
    ) {}
}