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
            <a class="infund-backto-dashboard" href="/dashboard">Back to Dashboard</a>
        </nav>

        <main>
            <div class="infund-profile-home">
                <div class="infund-profile">
                    <img src="{{ URL::asset('img/profile_pictures/'.Auth::user()->profile_picture )}}">
                </div>
                <h1>{{Auth::user()->name}}</h1>
            </div>

            <div class="infund-profile-proposals-container">
                <h2>Most Viewed Proposals</h2>
                <hr>
                <div class="infund-profile-proposals">
                    <div>
                    @if(count(Auth::user()->proposal)==0)
                        <span>You Haven't Uploaded a Proposal Yet!</span>
                    @endif
                    @foreach (Auth::user()->proposal as $proposal)
                        <div class="infund-proposal-card" style="background-image: url('/img/web_assets/thumbnail.png');background-size:cover;background-position:center;">
                            <span>
                                <h2>{{$proposal->title}}</h2>
                                <span>{{$proposal->description}}</span>
                                <span>0 investor(s) {{$proposal->views}} view(s)</span>
                            </span>
                            <span>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="infund-proposal-hover-options">
                                <a href="{{url('/view/'.Auth::user()->id.'/'.$proposal->title)}}">
                                    View
                                </a>
                                <!-- <a>
                                    Donate
                                </a> -->
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <h2>Recent Proposals</h2>
                <hr>
                <div class="infund-profile-proposals">
                    <div>
                    @if(count(Auth::user()->proposal)==0)
                        <span>You Haven't Uploaded a Proposal Yet!</span>
                    @endif
                    @foreach (Auth::user()->proposal as $proposal)
                        <div class="infund-proposal-card" style="background-image: url('/img/web_assets/thumbnail.png');background-size:cover;background-position:center;">
                            <span>
                                <h2>{{$proposal->title}}</h2>
                                <span>{{$proposal->description}}</span>
                                <span>0 investor(s) {{$proposal->views}} view(s)</span>
                            </span>
                            <span>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="infund-proposal-hover-options">
                                <a href="{{url('/view/'.Auth::user()->id.'/'.$proposal->title)}}">
                                    View
                                </a>
                                <!-- <a>
                                    Donate
                                </a> -->
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </main>

        <footer class="infund-dashboard-footer">
            <div>
                <div>
                    © InFund 2019
                </div>
            </div>
        </footer>
    </body>
</html>