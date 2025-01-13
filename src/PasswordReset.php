<?php

namespace Prodevel\NovaPasswordReset;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class PasswordReset extends Tool
{
    public function boot()
    {
        Nova::script('nova-password-reset', __DIR__.'/../dist/js/card.js');
        Nova::style('nova-password-reset', __DIR__.'/../dist/css/card.css');
    }

    public function renderNavigation()
    {
        return view('nova-password-reset::navigation');
    }
}