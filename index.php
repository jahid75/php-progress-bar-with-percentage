<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" value="A very simple way to show progress bar with percentage for long running php scripts">
    <title>Progress Bar Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <style>
    html {
        position: relative;
        min-height: 100%;
    }
    body {
        margin-bottom: 60px; /* Margin bottom by footer height */
    }
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px; /* Set the fixed height of the footer here */
        line-height: 60px; /* Vertically center the text there */
        background-color: #f5f5f5;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="jumbotron text-center">
                <h1>PHP Progress Bar</h1>
                <p>A very simple way to show progress bar with percentage for long running php scripts. You can use this as PHP csv import progress bar or any other server side php progress bar. I've used only PHP and JavaScript (Ajax and SSE)</p>
            </div>

            <div class="mt-3">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h6 class="alert alert-success text-center">Click below to start progress action!</h6>

                        <button id="startProcessing" class="btn btn-primary btn-lg mb-3">Start Processing!</button>

                        <div id="progessResults" style="display: none;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <footer class="footer bg-dark">
      <div class="container">
        <span class="text-muted">Coded by <a href="https://niamul.me">Niamul Islam</a>.</span>
      </div>
    </footer>
    <script src="app.js"></script>
</body>
</html>