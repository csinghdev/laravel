<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">My Blog</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/articles">Articles</a></li>
                <li><a href="/about">About Me</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_action('ArticlesController@show', $latest->title, [$latest->id]) !!}</li>
            </ul>
        </div>
    </div>
</nav>