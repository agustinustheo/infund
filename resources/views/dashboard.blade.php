<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
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
                    <img src="{{ URL::asset('img/web_assets/anonymous/profile_male.jpg') }}" style="width: 30px; height: 30px;">
                </div>
                <a id="profileExpandMenu">Agustinus Theodorus</a>
            </label>
            <label for="profileMobileExpandTrigger" id="profileMobileExpandBurger">
                <div></div>
                <div></div>
                <div></div>
            </label>
        </nav>
        <input id="profileExpandTrigger" type="checkbox">
        <nav class="infund-expand-nav">
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
        <input id="profileMobileExpandTrigger" type="checkbox">
        <nav class="infund-expand-mobile-nav">
            <form>
                <input class="infund-signup-textbox infund-dashboard-search" type="text" placeholder="Search..">
                <i class="fas fa-search"></i>
            </form>
            <div class="infund-nav-item-container">
                <div style="width: 30px; height: 30px; padding: 0; border-radius: 50%; overflow: hidden;">
                    <img src="{{ URL::asset('img/web_assets/anonymous/profile_male.jpg') }}" style="width: 30px; height: 30px;">
                </div>
                <a>Agustinus Theodorus</a>
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
            <label for="uploadFile" class="infund-dashboard-upload">
                <div>
                    <i class="fas fa-file-upload fa-5x"></i>
                </div>
                <input id="uploadFile" type="file" style="position: absolute; opacity: 0;">
            </label>
            <h2>Your Projects</h2>
            <div class="infund-dashboard-proposals">
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
            <h2>Top viewed proposals</h2>
            <div class="infund-dashboard-proposals">
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