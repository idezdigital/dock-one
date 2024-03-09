<?php

namespace Idez\DockOne\Data;

use Idez\DockOne\Enums\CardActiveFunction;
use Idez\DockOne\Enums\CardType;

readonly class Card extends DTO
{
    public function __construct(
        public string $profileId,
        public string $embossingSetupId,
        public CardType $type,
        public CardActiveFunction $activeFunction,
        public string $holderName,
        public Address $holderAddress,
        public string $expirationDate,
        public string $pin,
        public CardSetting $settings,
        public array $metadata
    ) {}
}