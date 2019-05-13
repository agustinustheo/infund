<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <script src="{{asset('js/jquery.min.js')}}"></script>
    </head>
    <body>
        @if(isset($proposal))
            <script type="text/javascript">
                $(document).ready(function(){
                    $.ajax({
                        type: 'post',
                        url: '/api/addview/'+{{$proposal->id}},
                        success: function(){
                            console.log("view added");
                        },
                        error: function(){
                            console.log("error")
                        }
                    });
                });
            </script>
        @endif
        <nav class="infund-nav infund-dashboard-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/web_assets/infund-header-logo.png') }}" height="42">
            </a>
            @if(Auth::check())
                <a class="infund-backto-dashboard" href="/dashboard">Back to Dashboard</a>
            @else
                <a class="infund-backto-dashboard" href="/">Back to Landing Page</a>
            @endif
        </nav>

        <main class="infund-dashboard-main infund-proposal-upload-main">
            @if(empty($proposal))
                <h2>NO PROPOSAL FOUND</h2>
                <div class="infund-proposal-form">
                    <div>
                        <div class="infund-proposal-card">
                            
                        </div>
                    </div>
                    <div>
                        <div id="infundProposalUploadData">
                            <div class="infund-signup-buttons">
                                <div class="infund-button"><a href="{{url('/dashboard')}}">Back</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @else 
                <h2>{{$proposal->title}}</h2>
                <div class="infund-proposal-form">
                    <div>
                        <div class="infund-proposal-card">
                            <embed src="{{URL::asset('storage/proposals/'.$proposal->filename)}}" type="application/pdf" style="height:100%">
                        </div>
                    </div>
                    <div>
                        <div id="infundProposalUploadData">
                            <label class="infund-signup-label">Author</label>
                            <div>{{$proposal->user->name}}</div>
                            <label class="infund-signup-label">Description</label>
                            <div class="infund-signup-desc">{{$proposal->description}}</div>
                            <label class="infund-signup-label">Funds Needed</label>
                            <div>{{$proposal->funds}}</div>
                            <div class="infund-signup-buttons">
                                <div class="infund-button"><a href="{{url('/dashboard')}}">Back</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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