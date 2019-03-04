<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    </head>
    <body>
        <nav class="infund-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/infund-header-logo.png') }}" height="42">
            </a>
            <div class="infund-nav-item-container">
                <div>Get the app</div>
                <a href="/signin">Sign In</a>
                <a href="/signup">Sign Up</a>
            </div>
        </nav>

        <style>
            .infund-signup-progress{
                position: relative; 
                height: 40px; 
                display: flex;
            }
            .infund-signup-progress-bar{
                width: 20%;
                height: 10px;
                
                background: #75c77d;
                margin: 2px;
                margin-top: 10px;
            }
            .infund-signup-progress-number{
                position: absolute; 
                width: 30px; 
                height: 30px; 
                background: white; 
                
                text-align: center; 
                line-height: 30px;
                border-radius: 50%; 
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
            }
            .infund-signup-container{
                width: 90vw; 
                margin: auto; 
                margin-top: 100px;
            }
            .infund-signup-container > h1{
                text-align: center;
            }
            .infund-signup-form > *{
                display: block;
                text-align: center;
                margin: auto;
                margin-top: 10px;
            }
            #signUpForm{
                display: flex; 
                width: 500%;
                transition: all .5s ease-out;
            }
        </style>

        <main class="infund-signup-container">
            <h1>Join InFund</h1>
            <div class="infund-signup-progress">
                <div class="infund-signup-progress-bar"></div>
                <div class="infund-signup-progress-number" style="left: calc(10% - (15px / 2)); ">
                    1
                </div>
                <div class="infund-signup-progress-bar"></div>
                <div class="infund-signup-progress-number" style="left: calc(30% - (15px / 2)); ">
                    2
                </div>
                <div class="infund-signup-progress-bar"></div>
                <div class="infund-signup-progress-number" style="left: calc(50% - (15px / 2)); ">
                    3
                </div>
                <div class="infund-signup-progress-bar"></div>
                <div class="infund-signup-progress-number" style="left: calc(70% - (15px / 2)); ">
                    4
                </div>
                <div class="infund-signup-progress-bar"></div>
                <div class="infund-signup-progress-number" style="left: calc(90% - (15px / 2)); ">
                    5
                </div>
                </div>
            </div>

            <form id="signUpForm">
                <div class="infund-signup-form" style="width: 100%;">
                    <b>What's your name?</b>
                    <span>Please enter your name</span>
                    <input type="text">
                    <input class="infund-signup-next-button" type="button" value="Next">
                </div>
                <div class="infund-signup-form" style="width: 100%;">
                    <b>What's your email address?</b>
                    <span>We will send a confirmation to your email</span>
                    <input type="text">
                    <input class="infund-signup-next-button" type="button" value="Next">
                </div>
                <div class="infund-signup-form" style="width: 100%;">
                    <b>What's your bank account number?</b>
                    <div>
                        <span>Bank</span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Bank Number</span>
                        <input type="text">
                    </div>
                    <input class="infund-signup-next-button" type="button" value="Next">
                </div>
                <div class="infund-signup-form" style="width: 100%;">
                    <b>Additional Information</b>
                    <div>
                        <span>Date of Birth</span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Home Address</span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Business Address</span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Account Type</span>
                        <input type="radio" name="accountType">Investors
                        <input type="radio" name="accountType">Starters
                    </div>
                    <input class="infund-signup-next-button" type="button" value="Next">
                </div>
                <div class="infund-signup-form" style="width: 100%;">
                    <b>Set up your password</b>
                    <div>
                        <span>Password</span>
                        <input type="text">
                    </div>
                    <span>Upload a photo of yourself</span>
                    <input type="file">
                    <input type="button" value="Finish">
                </div>
            </form>
        </main>
    </body>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            let count = 1;
            $('.infund-signup-next-button').on('click', function(){
                $('#signUpForm').css("transform", "translateX(" + count * 20 * -1 + "%)");
                count++;
            });
        });
    </script>
</html>