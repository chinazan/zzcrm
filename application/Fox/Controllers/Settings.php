<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\BadRequest;

class Settings extends \Fox\Core\Controllers\Base
{
    protected function getConfigData()
    {
        $data = $this->getConfig()->getData($this->getUser()->isAdmin());

        $fieldDefs = $this->getMetadata()->get('entityDefs.Settings.fields');

        foreach ($fieldDefs as $field => $d) {
            if ($d['type'] == 'password') {
                unset($data[$field]);
            }
        }
        return $data;
    }

    public function actionRead($params, $data)
    {
        return $this->getConfigData();
    }

    public function actionUpdate($params, $data, $request)
    {
        return $this->actionPatch($params, $data, $request);
    }

    public function actionPatch($params, $data, $request)
    {
        if (!$this->getUser()->isAdmin()) {
            throw new Forbidden();
        }

        if (!$request->isPut() && !$request->isPatch()) {
            throw new BadRequest();
        }

        if (isset($data['useCache']) && $data['useCache'] != $this->getConfig()->get('useCache')) {
            $this->getContainer()->get('dataManager')->clearCache();
        }

        $this->getConfig()->setData($data, $this->getUser()->isAdmin());
        $result = $this->getConfig()->save();
        if ($result === false) {
            throw new Error('Cannot save settings');
        }

        /** Rebuild for Currency Settings */
        if (isset($data['baseCurrency']) || isset($data['currencyRates'])) {
            $this->getContainer()->get('dataManager')->rebuildDatabase(array());
        }
        /** END Rebuild for Currency Settings */

        return $this->getConfigData();
    }
}
