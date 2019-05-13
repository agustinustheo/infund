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
                        <div class="infund-proposal-card">
                            <span>
                                <h2>Title</h2>
                                <span>brief desc..</span>
                                <span>100 investor 100 views</span>
                            </span>
                            <span>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="infund-proposal-hover-options">
                                <a>
                                    View
                                </a>
                                <a>
                                    Donate
                                </a>
                                <a>
                                    Blabla
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Recent Proposals</h2>
                <hr>
                <div class="infund-profile-proposals">
                    <div>
                        <div class="infund-proposal-card">
                            <span>
                                <h2>Title</h2>
                                <span>brief desc..</span>
                                <span>100 investor 100 views</span>
                            </span>
                            <span>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="infund-proposal-hover-options">
                                <a>
                                    View
                                </a>
                                <a>
                                    Donate
                                </a>
                                <a>
                                    Blabla
                                </a>
                            </div>
                        </div>
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