    
<nav class="navbar <?= isset($notfixed) ? 'bg-dark' : 'fixed-top' ?> navbar-expand-lg menu "> 
    <div class="container"> 
        <a class="navbar-brand" href="/">ArcMovie</a>

        <button class="navbar-toggler navbar-toggler-right search-menu <?= isset($notfixed) ? 'hidden' : '' ?>" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-search" style = "color: #fff"></i>

        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="input-group input-group-sm mb-3 <?= isset($notfixed) ? 'hidden' : '' ?>">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Search</span>
                        </div>
                        <input type="text" class="form-control  search-box reative-search main-search" aria-label="Small" >

                    </div>
                </li>
            </ul>
        </div>

    </div>
</nav>









