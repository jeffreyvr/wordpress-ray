<?php

namespace Spatie\WordPressRay\Composer\Installers;

class UserFrostingInstaller extends BaseInstaller
{
    protected $locations = array('sprinkle' => 'app/sprinkles/{$name}/');
}
