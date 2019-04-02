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
        <nav class="infund-landing-scroll-nav infund-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
            <div class="infund-nav-item-container">
                <a>Sign In</a>
                <a href="/signup">Sign Up</a>
            </div>
        </nav>

        <header class="infund-landing">
            <div class="infund-nav infund-landing-nav">
                <a href="/" class="infund-nav-logo">
                    <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
                </a>
                <div class="infund-nav-item-container">
                    <a class="infund-signin-form-show">Sign In</a>
                    <a href="/signup">Sign Up</a>
                </div>
            </div>
            <div class="infund-landing-desc">
                <div class="infund-logo-text">
                    InFund
                </div>
                <div style="text-align: center">
                        Where a Start Happens
                </div>
                <div class="infund-button infund-signin-form-show">
                    Start Now
                </div>
            </div>
            <div class="infund-landing-background"></div>
        </header>

        <main id="mainExplanation" class="infund-landing-page-desc">
            <div>
                <div>
                    <h1>
                        Features
                    </h1>
                    <div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Penny for your thoughts?</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-comment-dots fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                            Your ideas might just be what the world needs. Mega resetcorporations start from the simplest ideas. Food for thought!
                            </span>
                        </div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Keep ‘em drafting!</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-file-upload fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                Form up a business proposal for your idea, so that the public can see what you are up to. Ideas need capital to get the gears spinning!
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Make it rain!</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-money-check-alt fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                Receive investments from the public, and turn it into your very own small empire. You gotta’ start somewhere, right?
                            </span>
                        </div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Give back to the public!</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-hand-holding-usd fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                Startup businesses are nice and all, but don’t forget where you start! Return some of your gleaming profit to your investors. There are still more on their way to you!
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer style="display: flex; align-items: center;">
            <div style="margin: auto;">
                <div style="text-align: center">
                    <i>The biggest failure you can do is not trying</i>
                </div>
                <div style="text-align: center">
                    <input type="text" placeholder="Enter email.." style="width: 250px; height: 32px; padding-left: 10px; border-radius: 10px; border: 0; outline: none;">
                </div>
                <div class="infund-button infund-signin-form-show">
                    Start Now
                </div>
            </div>
        </footer>

        <form id="signInForm">
            <div class="infund-signin-form">
                <h1>Welcome Back!</h1>
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
    </body>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script>
        $('#signInForm').hide();
        var bindEvent = true;
        reachedExplanation();
        function reachedTop(){
            $(document).bind('scroll', function() {
                if($(this).scrollTop()<$('#mainExplanation').position().top && bindEvent === false){
                    reachedExplanation();
                    bindEvent = true;
                    $('nav.infund-nav').css("transform", "translateY(-57px)");
                }
            });
        }
        function reachedExplanation(){
            $(document).bind('scroll', function() {
                if($(this).scrollTop()>=$('#mainExplanation').position().top && bindEvent === true){
                    $(document).unbind();
                    bindEvent = false;
                    $('nav.infund-nav').css("transform", "translateY(0px)");
                    reachedTop();
                }
            });
        }
        $('.infund-signin-form-show').on('click', function(){
            $('#signInForm').fadeIn();
        });
        $('#signInForm').on('click', function(e){
            if (e.target !== this)
                return;
            else
                $('#signInForm').fadeOut();
        }); 
    </script>
</html>