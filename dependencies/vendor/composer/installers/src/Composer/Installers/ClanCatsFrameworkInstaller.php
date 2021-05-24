<?php

namespace Spatie\WordPressRay\Composer\Installers;

class ClanCatsFrameworkInstaller extends BaseInstaller
{
    protected $locations = array('ship' => 'CCF/orbit/{$name}/', 'theme' => 'CCF/app/themes/{$name}/');
}
