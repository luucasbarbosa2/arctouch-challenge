
<section>
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
            <li data-target="#main-slider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->

            {foreach $data, key, value, name='default'}
            {if $value.title}  

            <div class="carousel-item {if $dwoo.foreach.default.first}active{/if}" 

                 {if $config.mobile}
                 style="background-image: url('{$config.image_base_url}/w342/{$value.poster_path}')"

                 {/if}
                 {if !$config.mobile}

                 style="background-image: url('{$config.image_base_url}/original/{$value.backdrop_path}') "
                 {/if}
                 >
                 <div class="carousel-caption d-none d-md-block shadow">

                    {if !$config.mobile}
                    <a href = "/movies/details/{$value.id}">
                        <h2 >{$value.title}</h2>

                    </a>
                    {/if}

                </div>
            </div>

            {/if}

            {/foreach}         


            <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</section> 

<div class ="search-response hidden">
    <div class="jumbotron">
        <h3> Searching by: <span class="search-string " style = "text-decoration: underline"</span> </h3>


        <hr class="my-4">
        <div class ="response-movies "> </div>
    </div>
</div>
