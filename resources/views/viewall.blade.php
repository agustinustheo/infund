<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    </head>
    <body>
        <nav class="infund-nav infund-dashboard-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
        </nav>

        <main class="infund-viewall-proposal-container">
            <div class="infund-profile-proposals-container infund-viewall-proposal">    
                @if(count($proposals)==0)
                    <span>No Proposals Yet!</span>
                @else
                <h2>Most Viewed Proposals</h2>
                <hr>
                <div class="infund-proposal-masonry">
                @foreach ($proposals as $proposal)
                    <div class="infund-proposal-card infund-viewall-card" style="background-image: url('/img/web_assets/thumbnail.png');background-size:cover;background-position:center;">
                        <span>
                            <h2>{{$proposal->title}}</h2>
                            <span>{{$proposal->description}}</span>
                            <span>0 investor(s) {{$proposal->views}} view(s)</span>
                        </span>
                    </div>
                @endforeach
                </div>
                @endif
            </div>
            <footer class="infund-viewall-footer">
                <div>
                    <div>
                        © InFund 2019
                    </div>
                </div>
            </footer>
        </main>

    </body>
</html>