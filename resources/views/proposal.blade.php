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
        <nav class="infund-nav infund-dashboard-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
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

        <main class="infund-dashboard-main infund-proposal-upload-main">
            <h2>Proposal Confirm</h2>
            <div class="infund-proposal-form">
                <div>
                    <div class="infund-proposal-card">
                    </div>
                </div>
                <div>
                    <div id="infundProposalUploadData">
                        <label class="infund-signup-label">Title</label>
                        <div>InFund</div>
                        <label class="infund-signup-label">Author</label>
                        <div>Max Jong</div>
                        <label class="infund-signup-label">Description</label>
                        <div style="width: 300px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque ut, consequuntur odio voluptatum pariatur culpa et eaque sed quas possimus suscipit expedita accusantium facilis error, animi ratione fuga nam dignissimos.</div>
                        <label class="infund-signup-label">Funds Needed</label>
                        <div>Rp. 15.000.000,-</div>
                        <div>
                            <div class="infund-button">Cancel</div>
                            <div class="infund-button">Confirm</div>
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