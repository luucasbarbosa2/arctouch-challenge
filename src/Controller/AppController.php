<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;
use App\Model\Entity\Component;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $language;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $browserLanguage = str_replace("-", "_", explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]);

        $this->getRequest()->getSession()->write('Config.language', $browserLanguage);


        $this->getRequest()->getSession()->write('Config.mobile', $this->request->is('mobile'));

        I18n::setLocale($browserLanguage);
    }

    public function renderComponent($data, $componentName) {
        $component = new Component;
        $component->data = $data;
        $component->component = $componentName;
        return $component->build();
    }

    //return multiples components with the same data
    public function renderMultiComponent($data, $componentArrayName) {
        $component = new Component;
        $component->data = $data;
        foreach ($componentArrayName as $componentName) {
            $component->component = $componentName;
            $components[$componentName] = $component->build();
        }
        return $components;
    }

    public function _toArray($object) {
        return json_decode(json_encode($object), true);
    }

}
