<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Entity;

use \Cake\ORM\Entity;
use \App\Model\Entity\Datasource;
use \App\Model\Entity\Component;

/**
 * Description of Home
 *
 * @author Lucas
 */
class Home extends Entity {

    public function getByGenre($type, $genre) {
        $conn = new Datasource;
        $query = ["language" => "pt-BR", "page" => "1", "include_adult" => "false", "with_genres" => "$genre", "sort_by" => "popularity.desc","append_to_response"=>"images,videos", "include_image_language" => 'en,null,pt,xx' ];
        $data = $conn->getData("/discover/$type", $query);

        return $data;
    }

    public function getByPopularity($type) {
        $conn = new Datasource;
        $query = ["language" => "en-US", "page" => "1", "include_adult" => "false"];
        $data = $conn->getData("/$type/popular", $query);

        return $data;
    }

    public function getGenres($type) {
        $conn = new Datasource;
        $query = ["language" => "en-US", "include_adult" => "false"];
        $data = $conn->getData("/genre/$type/list", $query);

        return $data;
    }



    public function getMainBanner() {

        $conn = new Datasource;
        $query = ["language" => "en-US", "page" => "1", "include_adult" => "false", "query" => "a"];
        $data = $conn->getData('/search/movie', $query);


        $this->set(compact('html'));
    }

}
