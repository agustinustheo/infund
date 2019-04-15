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

        <main>
            <div class="infund-profile-home">
                <div class="infund-profile">
                    <img src="{{ URL::asset('img/profile_pictures/'.Auth::user()->profile_picture )}}">
                </div>
                <h1>{{Auth::user()->name}}</h1>
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