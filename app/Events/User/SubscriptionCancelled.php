<?php

namespace App\Events\User;

use Illuminate\Queue\SerializesModels;

class SubscriptionCancelled
{
    use Event, SerializesModels;
}
