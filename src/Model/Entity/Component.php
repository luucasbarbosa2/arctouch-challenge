<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Entity;
use Cake\Http\Session;
use Cake\ORM\Entity;

/**
 * Description of Component
 *
 * @author Lucas
 */
class Component extends Entity {

    //put your code here

    public $data;
    public $component;

    public function build() {
        $core = new \Dwoo\Core();
//        $dominantColor = ColorThief::getColor('http://image.tmdb.org/t/p/original//aw4FOsWr2FY373nKSxbpNi3fz4F.jpg');
        $session = new Session();
        $mobile = $session->read('Config.mobile');
       
        $data = ['data' => $this->data,  'config' => ['image_base_url' => \Cake\Core\Configure::read('Api.img_base_url'), 'mobile'=>$mobile]];
        
        $component = $core->get('../src/Components/' . $this->component . '.tpl', $data);
        return $component;
    }

    public function render() {
        
    }

}
