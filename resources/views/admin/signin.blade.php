<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens 
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    </head>
    <body>
        <nav class="infund-nav infund-signup-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
        </nav>

        <main>
            <form id="formAdmin">
                @csrf
                <div class="infund-signin-form infund-signin-page-form">
                    <h1>Sign In Admin</h1>
                    <div>
                        <label for="username">Username</label>
                        <input id="username" class="infund-signup-textbox" type="text" placeholder="Enter your username.." name="username">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input id="password" class="infund-signup-textbox" type="password" placeholder="Enter your password.." name="password">
                    </div>
                    <input class="infund-button infund-signup-button" type="submit" value="Sign In">
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
        <script>
            let formAdmin = document.getElementById('formAdmin');
            formAdmin.onsubmit = function(e){
                e.preventDefault();
                let username = document.getElementById('username');
                let password = document.getElementById('password');
                if(username.value == 'admin' && password.value=='admin'){
                    window.location = "http://localhost:8000/admin/viewall";
                }
                else{
                    alert('Wrong username/password!');
                }
            }
        </script>
    </body>
</html>