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
        <nav class="infund-nav infund-dashboard-nav infund-dashboard-in-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
            <form>
                <input class="infund-signup-textbox infund-dashboard-search" type="text" placeholder="Search..">
                <i class="fas fa-search"></i>
            </form>
            <label for="profileExpandTrigger" class="infund-nav-item-container">
                <div style="width: 30px; height: 30px; padding: 0; border-radius: 50%; overflow: hidden;">
                    <img src="{{ URL::asset('img/profile_pictures/'.Auth::user()->profile_picture )}}" style="width: 30px; height: 30px;">
                </div>
                <a id="profileExpandMenu">{{Auth::user()->name}}</a>
            </label>
            <label for="profileMobileExpandTrigger" id="profileMobileExpandBurger">
                <div></div>
                <div></div>
                <div></div>
            </label>
        </nav>
        <input id="profileExpandTrigger" type="checkbox">
        <nav class="infund-expand-nav">
            <a href="{{url('profile')}}">
                Profile
            </a>
            <a href="{{url('settings')}}">
                Settings
            </a>
            <a href="{{url('logout')}}">
                Sign Out
            </a>
        </nav>
        <input id="profileMobileExpandTrigger" type="checkbox">
        <nav class="infund-expand-mobile-nav">
            <form>
                <input class="infund-signup-textbox infund-dashboard-search" type="text" placeholder="Search..">
                <i class="fas fa-search"></i>
            </form>
            <div class="infund-nav-item-container">
                <div style="width: 30px; height: 30px; padding: 0; border-radius: 50%; overflow: hidden;">
                    <img src="{{ URL::asset('img/profile_pictures/'.Auth::user()->profile_picture )}}" style="width: 30px; height: 30px;">
                </div>
                <a>{{Auth::user()->name}}</a>
            </div>
            <a href="/profile">
                Profile
            </a>
            <a href="/settings">
                Settings
            </a>
            <a href="/">
                Sign Out
            </a>
        </nav>

        <main class="infund-dashboard-main">
            <h2>Upload Your Proposal</h2>
            <form method="POST" action="{{url('/upload')}}" enctype="multipart/form-data">
                <label for="uploadFile" class="infund-dashboard-upload">
                    @csrf
                       <div>
                        <i class="fas fa-file-upload fa-5x"></i>
                    </div>
                    <input id="uploadFile" type="file" name="proposal" style="position: absolute; opacity: 0;" onchange="this.form.submit()">
                </label>
            </form>
            <h2>Your Projects</h2> 
            <div class="infund-dashboard-proposals">
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
                                <a>
                                    Donate
                                </a>
                                {{-- <a>
                                    Blabla
                                </a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <h2>Top viewed proposals</h2>
            <div class="infund-dashboard-proposals">
                <div>
                    @if(count(Auth::user()->proposal)==0)
                        <span>You Haven't Uploaded a Proposal Yet!</span>
                    @endif
                    @foreach (Auth::user()->proposal->sortByDesc('views') as $proposal)
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
                                <a>
                                    Donate
                                </a>
                                {{-- <a>
                                    Blabla
                                </a> --}}
                            </div>
                        </div>
                    @endforeach
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