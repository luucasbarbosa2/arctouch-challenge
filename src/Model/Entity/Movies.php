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
    public function findByName($q) {
        $conn = new Datasource;
        $query = ["language" => "en-US", "page" => "1", "query" => "$q", "include_adult" => "false",  "append_to_response" => "videos,similar_movies,keywords,reviews,credits,recommendations", "include_image_language" => 'en,null,pt,xx'];
        $data = $conn->getData("/search/movie", $query);

        return $data;
    }
}
