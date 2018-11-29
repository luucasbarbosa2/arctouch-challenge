<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Model\Entity\People;
/**
 * Description of PeopleController
 *
 * @author Lucas
 */
class PeopleController extends AppController{
    
public function details($id){
        $notfixed = true;
        $people = new People;
        $person = $this->_toArray($people->find($id));
        $components = ['person-name', 'person-info'];
        $html = $this->renderMultiComponent($person, $components);
      
        $this->set(compact('html'));
        $this->set(compact('notfixed'));
        
    }
}
