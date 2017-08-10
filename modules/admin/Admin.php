<?php

namespace app\modules\admin;

use yii\base\Module;

/**
 * admin module definition class
 */
class Admin extends Module
{
    /**
     * @inheritdoc
     */
    public $layout = '/admin';

    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
