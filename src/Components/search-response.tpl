<div class="main-response">
{foreach $data, key, movie, name='default'}

        {if $movie.poster_path != null}
            
            <div class="response-cell" >
                <a href = "/movies/details/{$movie.id}">
                    <img class ="img-fluid"  src = "{$config.image_base_url}/w154/{$movie.poster_path}"/>
                </a>
            </div>
            {/if}
    {/foreach}
    </div>
