

{foreach $data, key, genres, name='default'}
<h4 class = "carousel-label"> {$key} </h4>
<div class="main-carousel">
    
    {foreach $genres, key, movie, name='default'}

        {if $movie.poster_path != null}
            
            <div class="carousel-cell carousel-cell-upcoming" style=" background-image: url('{$config.image_base_url}/w300/{$movie.poster_path}')">
                {if !$config.mobile}
                    <a href = "/movies/details/{$movie.id}">
                {else}  
                    <a>
                {/if}
                    <div class ='carousel-transparency'>

                        <div class ='carousel-info'>
                                <h5> {$movie.title} </h5>
                                <span>{truncate $movie.overview 200 }</span>
                                <br>
                                <button type="button" style = "opacity: 1" class="btn btn-primary btn-sm">{$movie.vote_average}</button>
                                
                                <button type="button" style = "opacity: 1" class="btn btn-secondary btn-sm">Free</button>
                                <button type="button" style = "opacity: 1" class="btn btn-secondary btn-sm">{date_format $movie.release_date "%m/%d/%Y"}</button>
                                <br>
                                {if $config.mobile}
                                    <a  href = "/movies/details/{$movie.id}"><button type="button"  style = "margin-top: 10px" class="btn btn-success btn-lg">Details</button></a>
                                {/if}  
                        </div>

                    </div>
                    </a>
                
            </div>
            {/if}
    {/foreach}
  
</div>
{/foreach}



