<?php
namespace Fox\Core;

use Fox\Core\Exceptions\Error;

class UpgradeManager extends Upgrades\Base
{
    protected $name = 'Upgrade';

    protected $params = array(
        'packagePath' => 'data/upload/upgrades',
        'backupPath' => 'data/.backup/upgrades',

        'scriptNames' => array(
            'before' => 'BeforeUpgrade',
            'after' => 'AfterUpgrade',
        )
    );
}