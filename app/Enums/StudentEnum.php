<?php

namespace App\Enums;

enum StudentEnum: string
{
    case STOP = 'stop';
    case CONTINUE = 'continue';
    case UNPAID = "unpaid";
    case PAID = "paid";
}