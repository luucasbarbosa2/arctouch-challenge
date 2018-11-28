<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Model\Entity\Home;

/**
 * Description of HomeController
 *
 * @author Lucas
 */
class HomeController extends AppController {

    public function index() {

        

        
        $home = new Home();
        $popular = $home->getByPopularity('movie');
        $genres = $this
                ->_toArray($home
                        ->getGenres('movie')
                            ->genres
                            );
        shuffle($genres);
        
        
        foreach(array_slice($genres, 0, 5) as $genre){
            $moviesByGenres[$genre['name']] = $this
                    ->_toArray($home
                            ->getByGenre('movie', $genre['id']))['results'];
        }
        $banner = $this->renderComponent($this
                ->_toArray(array_slice($popular
                        ->results, 0, 5)), 'main-slider');
        $slider = $this
                ->renderComponent($moviesByGenres, 'main-carousel');




        $this->set(compact('banner'));
        $this->set(compact('slider'));
    }

}
