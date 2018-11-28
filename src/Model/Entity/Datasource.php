<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Entity;

use \Cake\ORM\Entity;
use \Cake\Core\Configure;
use \Curl\Curl;
use Cake\Http\Session;

/**
 * Description of Datasource
 *
 * @author Lucas
 */
class Datasource extends Entity {

    public $baseURL;
    private $token;
    private $apiKey;
    private $connection;
    public $session;

    public function __construct(array $properties = array(), array $options = array()) {
        parent::__construct($properties, $options);

        //read Config/app.php properties
        $this->baseURL = Configure::read('Api.base_url');
        $this->apiKey = Configure::read('Api.api_key');
        $this->connection = new Curl();
        $this->session = new Session();
        $this->tokenize();
    }

    public function getData($path, $query) {

        if (is_array($query)) {
            $query = "&" . http_build_query($query);
        }


        return $this->connection->get($this->baseURL . $path . '?api_key=' . $this->apiKey . $query);
    }

    public function post() {
        
    }

    public function getToken() {
        return $this->connection->get('https://api.themoviedb.org/3/authentication/token/new?api_key=' . $this->apiKey);
    }

    public function tokenize() {
        
        //the API token is valid for 3 hours, so here I verify if the actualy token is valid.
        if (!$this->session->read('Api.token.value') || $this->session->read('Api.token.expiration_time') < time()) {
            $token = $this->getToken();
            $this->session->write('Api.token.value', $token->request_token);
            $this->session->write('Api.token.expiration_time', time() + (170 * 60));
            return true;
        }
    }

}
