<?php

namespace common\modules\chat\controllers;

use Ratchet\Server\IoServer;
use common\modules\chat\components\Chat;
use yii\console\Controller;

/**
 * Default controller for the `Chat` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $server = IoServer::factory(
            new Chat(),
            8080
        );

        $server->loop->addPeriodicTimer(2, function () {
            echo date('H:1:s');
        });
        echo 'server starting';

        $server->run();
    }
}
