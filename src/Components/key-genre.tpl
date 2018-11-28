        {if $data.keywords.keywords || $data.genres}
        <div class ="row" style = "margin-left: 15px">
            <div class ="col-md-6"> 
                <span> Keywords </span><br>
                {foreach $data.keywords.keywords, key, keyword, name='default'}
                <button type="button" class="btn btn-primary btn-sm tag">{upper $keyword.name}</button>
                {/foreach}
            </div>

            <div class ="col-md-6"> 
                <span> Genres </span><br>
                {foreach $data.genres, key, genres, name='default'}
                <button type="button" class="btn btn-primary btn-sm tag">{upper $genres.name}</button>
                {/foreach}
            </div>              
        </div>
        {/if}
