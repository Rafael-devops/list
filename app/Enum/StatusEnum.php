<?php

namespace App\Enum;

enum StatusEnum: int
{
    case URGENT = 1;
    case IMPORTANT = 2;
    case LITTLE_IMPORTANT = 3;
}
