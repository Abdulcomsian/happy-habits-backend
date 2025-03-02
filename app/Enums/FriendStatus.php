<?php

namespace App\Enums;

enum FriendStatus:string
{
    case PENDING = "pending";
    case ACCEPTED = "accepted";
    case REJECTED = "rejected";
}
