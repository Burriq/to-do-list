<?php

namespace app\controllers;

use app\models\AppModel;
use core\Controller as CoreController;

class AppController extends CoreController{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
    }

}