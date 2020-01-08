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
            <a class="infund-backto-dashboard" href="/dashboard">Back to Dashboard</a>
        </nav>

        <main class="infund-dashboard-main infund-proposal-upload-main">
            <h2>Proposal Confirm</h2>
            <div class="infund-proposal-form">
                <div>
                    <div class="infund-proposal-card">
                        <embed src="{{URL::asset('storage/proposals/'.$filename)}}" type="application/pdf" style="height:100%">
                    </div>
                </div>
                <div>
                    <form method="POST" action="{{url('/proposal-store')}}">
                        @csrf
                        <div id="infundProposalUploadData">
                            <label class="infund-signup-label">Title</label>
                            <div>{{$title}}</div>
                            <input type="hidden" value={{$title_hid}} name="title">
                            <label class="infund-signup-label">Author</label>
                            <div>{{Auth::user()->name}}</div>
                            <label class="infund-signup-label">Description</label>
                            <div class="infund-signup-desc">{{$desc}}</div>
                            <input type="hidden" value={{$desc_hid}} name="desc">
                            <label class="infund-signup-label">Funds Needed</label>
                            <div>{{$fund}}</div>
                            <input type="hidden" value={{$fund}} name="fund">
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