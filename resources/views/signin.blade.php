<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    </head>
    <body>
        <nav class="infund-nav infund-signup-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
            <div class="infund-nav-item-container">
                <a href="/signin">Sign In</a>
                <a href="/signup">Sign Up</a>
            </div>
        </nav>

        <main>
            <form>
                <div class="infund-signin-form infund-signin-page-form">
                    <h1>Sign In</h1>
                    <div>
                        <label for="email">Email</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your address..">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input class="infund-signup-textbox" type="password" placeholder="Enter your password..">
                    </div>
                    <input class="infund-button infund-signup-button" type="button" value="Sign In">
                    <a href="/forgot">Forgot Password?</a>
                    <a href="/signup">Don't have InFund account? Sign Up</a>
                </div>
            </form>
        </main>

        <footer class="infund-signup-footer">
            <div>
                <div>
                    © InFund 2019
                </div>
            </div>
        </footer>
    </body>
</html>