<?php

namespace Prodevel\NovaPasswordReset\Nova;

use Laravel\Nova\Card;

class PasswordResetCard extends Card
{
    public function __construct()
    {
        $this->width('1/3');
    }

    public function component()
    {
        return 'password-reset-card';
    }
}