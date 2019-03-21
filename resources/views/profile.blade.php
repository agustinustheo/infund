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
        <nav class="infund-nav infund-dashboard-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
            <a class="infund-backto-dashboard" href="/dashboard">Back to Dashboard</a>
        </nav>

        <style>
            .infund-profile-home{
                width: 100vw;
                height: 225px;
                margin-top: 57px;

                display: flex;
                flex-direction: column;
                align-items: center;
                
                background-image: url("../img/web_assets/background.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: 50% 50%;
            }
            .infund-profile{
                width: 115px;
                height: 115px;
                border-radius: 50%;
                overflow: hidden;
            }
            .infund-profile-home > *{
                margin: auto;
                text-align: center;
            }
            .infund-profile > img{
                width: 115px;
                height: 115px;
            }
            .infund-profile-form{
                width: 90vw;
                margin: auto;

                display: grid;
                grid-template-columns: 30% 70%;
            }
            .infund-profile-form > div:nth-child(1){
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
            }
            .infund-profile-form > div:nth-child(1) > div > a{
                font-size: 14pt;
                color: black;
                display: block;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .infund-profile-form > div:nth-child(1) > div > a:hover{
                font-size: 14pt;
                color: black;
                text-decoration: underline;
            }
            .infund-profile-form > div:nth-child(2) > div > div,
            .infund-profile-form > div:nth-child(2) > div > label{
                margin-top: 20px;
                margin-bottom: 20px;
            }
            span#addMorePreferences{
                display: inline-block;
                padding: 5px;
                margin: 4px;
                cursor: default;
            }
            span#addMorePreferences > div:nth-child(1){
                width: 20px;
                height: 20px;
                text-align: center;
                display: inline-block;
                line-height: 20px;
                border-radius: 50%;
                border: 1px solid black;
                margin-right: 5px;
                cursor: pointer;
            }
            span#addMorePreferences > div:nth-child(2){
                display: inline-block;
            }
            #infundProfilePreferences{
                display: none;
            }
            #infundPreferencesContent{
                height: auto;
                display: block;
            }
            #infundProfilePreferences > h2{
                margin-top: 20px;
            }
            .infund-preferences{
                display: inline-block;
                border-radius: 5px;
                border: 1px solid black;
                margin: 3px;
                padding: 5px;
            }
        </style>

        <main>
            <div class="infund-profile-home">
                <div class="infund-profile">
                    <img src="{{ URL::asset('img/web_assets/anonymous/profile_male.jpg') }}">
                </div>
                <h1>Agustinus Theodorus</h1>
            </div>

            <div class="infund-profile-view" style="min-height: calc(100vh - 390px); display: none;">
                <div>
                    <div id="infundProfileAccount">
                        <label class="infund-signup-label" for="fullName">Name</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your name..">
                        <label class="infund-signup-label" for="email">Email</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your email..">
                        <label class="infund-signup-label" for="bankName">Bank</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your bank name..">
                        <label class="infund-signup-label" for="bankNumber">Bank Number</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your bank number..">
                        <label class="infund-signup-label" for="dateOfBirth">Date of Birth</label>
                        <input class="infund-signup-textbox" type="text" placeholder="dd/mm/yyyy">
                        <label class="infund-signup-label" for="homeAddress">Home Address</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your address..">
                        <label class="infund-signup-label" for="businessAddress">Business Address</label>
                        <input class="infund-signup-textbox" type="text" placeholder="Enter your business address..">
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
                    </div>
                </div>
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

                            </span>
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

                            </span>
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