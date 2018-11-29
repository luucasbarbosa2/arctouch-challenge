<div class="col-md-4">
    <img class="img-fluid" src="{$config.image_base_url}/w300/{$data.images.profiles.0.file_path}" alt="">
</div>
<div class="col-md-8">
    <div class ="container">
        <h3 class="my-3">Biography</h3>
        <p>{$data.biography}</p>

        <h3 class="my-3">Known by</h3>
        {foreach $data.combined_credits.cast, key, movie, name='default'}
        {if $dwoo.foreach.default.index < 30}
        {if $movie.media_type == "movie"}
        <div class ='poster-mini' style = "width: 10%; display: inline-block; padding-bottom: 4px">
            <a href ="/movies/details/{$movie.id}">
                <img class="img-fluid" src="{$config.image_base_url}/w92/{$movie.poster_path}" alt="">
            </a>
        </div>
        {else}
        <a href ="/movies/details/{$movie.id}">
            <div class ='poster-mini' style = "width: 10%; display: inline-block; padding-bottom: 4px">
                <img class="img-fluid" src="{$config.image_base_url}/w92/{$movie.poster_path}" alt="">
                <a href ="/movies/details/{$movie.id}">
            </div>
            {/if}

            {/if}
            {/foreach}
    </div>
</div>

