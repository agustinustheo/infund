<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    </head>
    <body>
        <nav class="infund-nav infund-dashboard-nav">
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

        <main style="width: 90vw; margin: auto; margin-top: 60px;">
            <h2>Based on your preferences</h2>
            <div style="display: flex">
                <div class="infund-how-to-card">
                    <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Upload Work</h4>
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                        <i class="fas fa-file-upload fa-7x"></i>
                    </div>
                    <hr>
                    <span style="display: block; margin-top: 20px;">
                        Upload all of your best work in your Create page, and watch the magic happen!
                    </span>
                </div>
            </div>
            <h2>Top viewed proposals</h2>
            <div style="display: flex">
                <div class="infund-how-to-card">
                    <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Upload Work</h4>
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                        <i class="fas fa-file-upload fa-7x"></i>
                    </div>
                    <hr>
                    <span style="display: block; margin-top: 20px;">
                        Upload all of your best work in your Create page, and watch the magic happen!
                    </span>
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