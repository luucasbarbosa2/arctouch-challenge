<?php

namespace App\Controller;

use App\Model\Entity\Home;
use App\Model\Entity\Movies;

/**
 * Description of HomeController
 *
 * @author Lucas
 */
class HomeController extends AppController {

    public function index() {

        $movies = new Movies;
        //get popular movies
        $popular = $movies
                ->getByPopularity('movie'); 
        //get genres
        $genres = $this
                ->_toArray($movies
                        ->getGenres('movie')
                        ->genres); 
        //get banner       
        $movie = $this
                ->_toArray(array_slice($popular
                        ->results, 0, 5));
        $movie['genres'] = $genres;     
        shuffle($genres);
        
        //search by gender
        foreach(array_slice($genres, 0, 5) as $genre){
            
            $moviesByGenres[$genre['name']] = $this
                    ->_toArray($movies
                            ->getByGenre('movie', $genre['id']))['results'];
        }
        
        //get upcoming films by page
        $upcomingMovies = $this
                ->_toArray($movies
                        ->upcoming('1'));

        //render componentss
        $upcoming = $this
                ->renderComponent( $upcomingMovies, 'upcoming-carousel');
        $banner = $this
                ->renderComponent($movie, 'main-slider');
        $slider = $this
                ->renderComponent($moviesByGenres, 'main-carousel');

        
        
        
        //set variables to view
        $this->set(compact('upcoming'));
        $this->set(compact('banner'));
        $this->set(compact('slider'));
    }
    
    

}
