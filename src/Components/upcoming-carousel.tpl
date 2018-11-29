<div class ="carousel-upcoming">
    <div class ="ajax-load">
    <h3 class = "carousel-label">Upcoming Movies </h3>
    <div class="main-carousel ">
    {foreach $data.results, key, movie, name='default'}

            {if $movie.poster_path != null}

                <div class="carousel-cell" style=" background-image: url('{$config.image_base_url}/w300/{$movie.poster_path}')">
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
                                    <button type="button" class="btn  btn-secondary btn-sm">Free</button>
                                    <button type="button" class="btn  btn-secondary btn-sm">{date_format $movie.release_date "%m/%d/%Y"}</button>

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
</div>
    <div class ="justify-center load-ajax-icon hidden">
      <img src="/images/load.gif" alt=""/>
  </div>         
<nav class = "paginator">
  <ul class="pagination justify-content-center">
    <li class="page-item {if $data.page === 1} disabled {/if}" data-page = "{$data.page - 1}">
      <span class="pagination-item previous page-link " style = "color: inherit">
          Previous 
      </span>
    </li>
    {if $data.page != 1} 
        <li class="page-item pagination-item" data-page = "{$data.page - 1}">
            <a class="page-link" >
                {$data.page - 1}
            </a>
        </li>
    {/if}
    <li class="page-item active pagination-item">
      <span class="page-link">
        {$data.page}
        <span class="sr-only">(current)</span>
      </span>
    </li>
    {if $data.total_pages != $data.page} 
        <li class="page-item pagination-item " data-page = "{$data.page + 1}" >
            <a class="page-link" >
                {$data.page + 1}
            </a>
        </li>
    {/if}

    <li class="page-item pagination-item {if $data.page == $data.total_pages} disabled {/if}" data-page = "{$data.page + 1}">
      <a class="page-link  "  >
          Next
      </a>
    </li>
    {if $data.total_pages != $data.page} 
    <li class="page-item pagination-item" data-page = "{$data.total_pages}" >
        <a class="page-link">
            ... {$data.total_pages}
        </a>
    </li>
    {/if}
  </ul>
</nav>

</div>
  
  

  