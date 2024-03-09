<?php

namespace Idez\DockOne\Enums;

enum CardActiveFunction: string {
    case Credit = 'CREDIT';
    case Debit = 'DEBIT';
    case Voucher = 'VOUCHER';
    case Multiple = 'MULTIPLE';
}
