<?php

namespace Idez\DockOne\Enums;

enum CardEmbossingStatus: string {
    case Pending = 'PENDING';
    case Processing = 'PROCESSING';
    case Processed = 'PROCESSED';
    case NotApply = 'NOT_APPLY';
}
