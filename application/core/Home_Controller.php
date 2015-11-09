<?php

/**
* Encoding     :   UTF-8
* Created on   :   2015-11-9 19:14:21 by caowenpeng , caowenpeng1990@126.com
*/

class Home_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->init();
    }
    
    public function init(){
        echo '<pre>我被调用了,在父类中</pre>';
    }
}