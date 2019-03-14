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
        <nav class="infund-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
            <div class="infund-nav-item-container">
                <a href="/signin">Back to Sign In</a>
            </div>
        </nav>

        <main>
            <form>
                <div class="infund-signin-form infund-signin-page-form infund-forgot-page-form">
                    <h1>Forgot Password</h1>
                    <div>
                        <label for="email">Let us help you. Please enter your email address below.</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your email..">
                    </div>
                    <input class="infund-button infund-signup-button" type="button" value="Confirm">
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