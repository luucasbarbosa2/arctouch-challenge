<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Entity;

use \Cake\ORM\Entity;

/**
 * Description of Movies
 *
 * @author Lucas
 */
class Movies extends Entity {

    public function find($id) {
        $conn = new Datasource;
        $query = ["language" => "en-US", "page" => "1", "include_adult" => "false",  "append_to_response" => "videos,similar_movies,keywords,reviews,credits,recommendations", "include_image_language" => 'en,null,pt,xx'];
        $data = $conn->getData("/movie/$id", $query);

        return $data;
    }
    public function findByName($q, $page = 1) {
        $conn = new Datasource;
        $query = ["language" => "en-US", "page" => "$page", "query" => "$q", "include_adult" => "false",  "append_to_response" => "videos,similar_movies,keywords,reviews,credits,recommendations", "include_image_language" => 'en,null,pt,xx'];
        $data = $conn->getData("/search/movie", $query);

        return $data;
    }
    public function getByGenre($type, $genre) {
        $conn = new Datasource;
        $query = ["language" => "en-US", "page" => "1", "include_adult" => "false", "with_genres" => "$genre", "sort_by" => "popularity.desc","append_to_response"=>"images,videos", "include_image_language" => 'en,null,pt,xx' ];
        $data = $conn->getData("/discover/$type", $query);

        return $data;
    }

    
    public function searchMovies($genre) {
        $conn = new Datasource;
        $query = ["language" => "pt-BR", "page" => "1", "include_adult" => "false", "with_genres" => "$genre", "sort_by" => "popularity.desc","append_to_response"=>"images,videos", "include_image_language" => 'en,null,pt,xx' ];
        $data = $conn->getData("/search/movie", $query);

        return $data;
    }
    
    public function getByPopularity($type) {
        $conn = new Datasource;
        $query = ["language" => "en-US", "page" => "1", "include_adult" => "false"];
        $data = $conn->getData("/$type/popular", $query);

        return $data;
    }
    
    public function upcoming($page = '1'){
        $conn = new Datasource;
        $query = ["language" => "en-US", "include_adult" => "false", "page" => $page];
        $data = $conn->getData("/movie/upcoming", $query);
        return $data;        
    }
    
    public function getGenres($type) {
        $conn = new Datasource;
        $query = ["language" => "en-US", "include_adult" => "false"];
        $data = $conn->getData("/genre/$type/list", $query);

        return $data;
    }
}
