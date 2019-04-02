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

        <main class="infund-signup-container">
            <h1>Join InFund</h1>
            <div class="infund-signup-progress">
                <div class="infund-signup-progress-bar">
                    <div class="infund-signup-progress-bar-full"></div>
                </div>
                <div class="infund-signup-progress-number" style="left: calc(10% - (15px / 2)); ">
                    1
                </div>
                <div class="infund-signup-progress-bar">
                    <div class="infund-signup-progress-bar-full"></div>
                </div>
                <div class="infund-signup-progress-number" style="left: calc(30% - (15px / 2)); ">
                    2
                </div>
                <div class="infund-signup-progress-bar">
                    <div class="infund-signup-progress-bar-full"></div>
                </div>
                <div class="infund-signup-progress-number" style="left: calc(50% - (15px / 2)); ">
                    3
                </div>
                <div class="infund-signup-progress-bar">
                    <div class="infund-signup-progress-bar-full"></div>
                </div>
                <div class="infund-signup-progress-number" style="left: calc(70% - (15px / 2)); ">
                    4
                </div>
                <div class="infund-signup-progress-bar">
                    <div class="infund-signup-progress-bar-full"></div>
                </div>
                <div class="infund-signup-progress-number" style="left: calc(90% - (15px / 2)); ">
                    5
                </div>
                </div>
            </div>

            <form id="signUpForm">
                <div class="infund-signup-form">
                    <b>What's your name?</b>
                    <span>Please enter your name</span>
                    <input class="infund-signup-textbox" type="text" placeholder="Enter your name..">
                    <input class="infund-button infund-signup-button infund-signup-next-button" type="button" value="Next">
                </div>
                <div class="infund-signup-form">
                    <b>What's your email address?</b>
                    <span>We will send a confirmation to your email</span>
                    <input class="infund-signup-textbox" type="text" placeholder="Enter your email..">
                    <div style="display: flex;">
                        <input class="infund-button infund-signup-button infund-signup-back-button" type="button" value="Back">
                        <input class="infund-button infund-signup-button infund-signup-next-button" type="button" value="Next">
                    </div>
                </div>
                <div class="infund-signup-form">
                    <b>What's your bank account number?</b>
                    <div>
                        <label class="infund-signup-label" for="bankName">Bank</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your bank name..">
                    </div>
                    <div>
                        <label class="infund-signup-label" for="bankNumber">Bank Number</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your bank number..">
                    </div>
                    <div style="display: flex;">
                        <input class="infund-button infund-signup-button infund-signup-back-button" type="button" value="Back">
                        <input class="infund-button infund-signup-button infund-signup-next-button" type="button" value="Next">
                    </div>
                </div>
                <div class="infund-signup-form">
                    <b>Additional Information</b>
                    <div>
                        <label class="infund-signup-label" for="dateOfBirth">Date of Birth</label>
                        <input class="infund-signup-textbox" type="text" placeholder="dd/mm/yyyy">
                    </div>
                    <div>
                        <label class="infund-signup-label" for="homeAddress">Home Address</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your address..">
                    </div>
                    <div>
                        <label class="infund-signup-label" for="businessAddress">Business Address</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your business address..">
                    </div>
                    <div>
                        <label>Account Type</label>
                        <label for="investorsRadio">
                            <input type="radio" name="accountType">
                            Investors
                        </label>
                        <label for="startersRadio">
                            <input type="radio" name="accountType">
                            Starters
                        </label>
                    </div>
                    <div style="display: flex;">
                        <input class="infund-button infund-signup-button infund-signup-back-button" type="button" value="Back">
                        <input class="infund-button infund-signup-button infund-signup-next-button" type="button" value="Next">
                    </div>
                </div>
                <div class="infund-signup-form">
                    <b>Set up your password</b>
                    <div>
                        <label class="infund-signup-label" for="password">Password</label>
                        <input class="infund-signup-textbox" type="password" placeholder="Enter your password..">
                    </div>
                    <span>Upload a photo of yourself</span>
                    <label for="uploadFile">Click me to choose a file</label>
                    <div style="display: flex;">
                        <input class="infund-button infund-signup-button infund-signup-back-button" type="button" value="Back">
                        <input class="infund-button infund-signup-button" type="button" value="Finish">
                    </div>
                </div>
                <input id="uploadFile" type="file" style="position: absolute; opacity: 0;">
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

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            let count = 1;
            let signUpProgressBar = document.getElementsByClassName('infund-signup-progress-bar');
            signUpProgressBar[count-1].getElementsByClassName('infund-signup-progress-bar-full')[0].style.width = "100%";
            $('.infund-signup-next-button').on('click', function(){
                if(count == 0){
                    count = 1;
                }
                signUpProgressBar[count].getElementsByClassName('infund-signup-progress-bar-full')[0].style.width = "100%";
                $('#signUpForm').css("transform", "translateX(" + count * 20 * -1 + "%)");
                count++;
            });
            $('.infund-signup-back-button').on('click', function(){
                count--;
                signUpProgressBar[count].getElementsByClassName('infund-signup-progress-bar-full')[0].style.width = "0%";
                $('#signUpForm').css("transform", "translateX(" + (count - 1) * 20 * -1 + "%)");
            });
        });
    </script>
</html>