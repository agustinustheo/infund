<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    </head>
    <body>
        <nav class="infund-nav infund-dashboard-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
            <a class="infund-backto-dashboard" href="/dashboard">Back to Dashboard</a>
        </nav>

        <main class="infund-dashboard-main infund-proposal-upload-main">
            <h2>Proposal Upload</h2>
            <div class="infund-proposal-form">
                <div>
                    <div class="infund-proposal-card">
                        <embed src="{{URL::asset('storage/proposals/'.$filename)}}" type="application/pdf" style="height:100%">
                    </div>
                </div>
                <div>
                    <form method="POST" action="{{url('/proposal')}}">
                        @csrf
                        <div id="infundProposalUploadData">
                            <label class="infund-signup-label" for="title">Title</label>
                            <input class="infund-signup-textbox" type="text" placeholder="Enter your title.." name="title">
                            <label class="infund-signup-label" for="email">Author</label>
                            <div>{{Auth::user()->name}}</div>
                            <label class="infund-signup-label" for="description">Description</label>
                            <textarea class="infund-signup-textarea" type="text" placeholder="Enter your description.." name="desc"></textarea>
                            <label class="infund-signup-label" for="funds">Funds Needed</label>
                            <input class="infund-signup-textbox" type="text" placeholder="Enter funds needed.." name="fund">
                            <input type="hidden" value={{$filename}} name="filename">
                            <div class="infund-signup-buttons">
                                <div class="infund-button"><a href="{{url('/dashboard')}}">Cancel</a></div>
                                <input type="submit" class="infund-button" value="Confirm" style="border:none;"></input>
                            </div>
                        </div>
                    </form>
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