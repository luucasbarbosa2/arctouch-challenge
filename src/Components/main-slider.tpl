<section>
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->

            {foreach $data, key, value, name='default'}

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
                    <h2 >{$value.title}</h2>

                    <h5>This is a description for the first slide.</h5>
                    {/if}

                </div>
            </div>

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
        <a class="btn btn-primary" href="#" role="button">Advanced search</a>
        <div class ="col-md-10 advanced-search ">
            <div class ="jumbotron">
                <form class="">
                    <div class ="row">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Search</span>
                            </div>
                            <input type="text" class="form-control form-control-sm reative-search ">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>                                



                    </div>
                </form>
            </div>

        </div>

        <hr class="my-4">
        <div class ="response-movies "> </div>
    </div>
</div>