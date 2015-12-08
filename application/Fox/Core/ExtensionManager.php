<?php
namespace Fox\Core;

class ExtensionManager extends Upgrades\Base
{
    protected $name = 'Extension';

    protected $params = array(
        'packagePath' => 'data/upload/extensions',
        'backupPath' => 'data/.backup/extensions',

        'scriptNames' => array(
            'before' => 'BeforeInstall',
            'after' => 'AfterInstall',
            'beforeUninstall' => 'BeforeUninstall',
            'afterUninstall' => 'AfterUninstall',
        )
    );
}
