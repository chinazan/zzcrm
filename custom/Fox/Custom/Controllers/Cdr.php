<?php

namespace Fox\Custom\Controllers;

class Cdr extends \Fox\Core\Templates\Controllers\Base
{
    public function actionPutCdr($params, $data, $request){

        /*uniqueid=1448937437.341492&dialstatus=ANSWER&answeredtime=4&dialtime=14&starttime=1448937437&endtime=1448937451&CALLFILENAME=/var/spool/asterisk/monitor/20151201-103717_18191818883-all.WAV&src=10199&dst=18191818883
        */

        $data = [
            'src' => $request->get('src'),
            'uniqueid' => $request->get('uniqueid'),
            'status' => $request->get('dialstatus'),
            'answeredtime' => $request->get('answeredtime'),
            'dialtime' => $request->get('dialtime'),
            'starttime' => date("Y-m-d H:i:s", $request->get('starttime')),
            'endtime' => date("Y-m-d H:i:s", $request->get('endtime')),
            'dst' => $request->get('dst'),
            'droptype' => $request->get('droptype'),
            'type' => $request->get('type'),
        ];

        if ($entity = $this->getRecordService()->createEntity($data)) {
            return 1;//return $entity->toArray();
        }

        return 0;
        //throw new Error();
    }
}
