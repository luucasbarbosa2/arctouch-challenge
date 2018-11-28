<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use \Curl\Curl;

/**
 * Description of CurlController
 *
 * @author Lucas
 */
class CurlController extends AppController{

    public function index() {
//        $curl = new Curl();
//        debug($curl->get('https://www.google.com/'));
        echo "este";
        $this->disableAutoRender();
        
    }

}
