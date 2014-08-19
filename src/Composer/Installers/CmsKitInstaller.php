<?php
namespace Composer\Installers;

class CmsKitInstaller extends BaseInstaller
{
    protected $locations = array(
        'core' => 'backend/',
        'adminwizard' => 'backend/admin/{$name}/',
        'extension' => 'backend/extensions/{$name}/',
        'template' => 'backend/templates/{$name}/',
        'wizard' => 'backend/wizards/{$name}/',
    );
}
