{if $data.credits.cast}
<div class =" col-md-12">
    <div class ="carousel-content">
        <h3 class="my-3">Cast</h3>
        <div class="main-carousel">

            <br>
            {foreach $data.credits.cast, key, person, name='default'}

            {if $person.profile_path != null}

            <div class="carousel-cell" style=" background-image: url('{$config.image_base_url}/w300/{$person.profile_path}')">
                {if !$config.mobile}
                <a href = "/people/details/{$person.id}"> 


                    {/if}
                    <div class ='carousel-transparency'>

                        <div class ='carousel-info'>
                            <h5> {$person.name} as {$person.character} </h5>

                            {if $config.mobile}
                            <a  href = "/people/details/{$person.id}"><button type="button"  style = "margin-top: 10px" class="btn btn-success btn-lg">Details</button></a>
                            {/if}  
                        </div>

                    </div>
                </a>

            </div>
            {/if}
            {/foreach}

        </div>
    </div>
</div>   
{/if}
