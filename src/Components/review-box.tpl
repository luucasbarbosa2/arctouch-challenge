        <div class ="col-md-12">
            <div class="detailBox">
                <div class="titleBox">
                  <label>Reviews</label>
                </div>
                <div class="actionBox">
                    <ul class="commentList">
                                        {if !$data.reviews.results}
                                            <div class="commentText">
                                            <p class="commentName">This movie doesn't have reviews yet</p>
                                            </div>
                                        {/if}                        
                        {foreach $data.reviews.results, key, review, name='default'}
                            
                                <li>
                                    <div class="commentText">

                                            <p class="commentName">{$review.author}</p>
                                            <p class="">{$review.content}</p>
                                    </div>
                                        
                                </li>
                            
                        {/foreach}
                    </ul>

                </div>
            </div>
        </div>

