<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Model\Entity\Movies;

/**
 * Description of MoviesController
 *
 * @author Lucas
 */
class MoviesController extends AppController {

    public function initialize() {;
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    //put your code here
    public function details($id) {
        $notfixed = true;

        $movies = new Movies;
        $movie = $this->_toArray($movies->find($id));

        $components = ['movie-header', "key-genre", "credits", "similar", "review-box", "movie-title"];

        $html = $this->renderMultiComponent($movie, $components);

        $this->set(compact('html'));

        $this->set(compact('notfixed'));
    }

    public function findByName() {
//        $this->disableAutoRender();
        $movies = new Movies;
        $query = $this->request->getData();
        $movie = $this->_toArray($movies->findByName($query['data']));
        $html = $this->renderComponent($movie['results'], "search-response");
        $this->set("html", $html);
        $this->set('_serialize', 'html');
        
    }

}
