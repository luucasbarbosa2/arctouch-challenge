
        <div class="col-md-4">
                <img class="img-fluid" src="{$config.image_base_url}/w342/{$data.poster_path}" alt="">
        </div>
        <div class="col-md-8">
            <div class ="container">
                <h3 class="my-3">Overview</h3>
                <p>{$data.overview}</p>
                <div class ="rating">

                    <p style = "font-size: 10px" >Rating (rounded)</p>
                    <?php 
                    $rating = round($data['data']['vote_average'] / 2); 

                    
                    for($i = 1; $i <= $rating; $i++){
                    echo "<span class='rating-checked fa fa-star '></span>";
                    }
                    for($i = 1; $i <= (5 - $rating); $i++){
                    echo "<span class=' fa fa-star '></span>";
                    }                   

                    
                    
                    ?>

                </div>
                <div class="videoWrapper">
                    <!-- Copy & Pasted from YouTube -->
                    <iframe id="ytplayer" type="text/html" 
                            src="http://www.youtube.com/embed/{$data.videos.results.0.key}?autoplay=0&controls=0"
                            frameborder="0"> </iframe>                
                </div>

            </div>
        </div>