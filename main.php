<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Develop Intern Homework">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Wenbo Hou">
        <!--Link to external style sheet-->
        <link rel="stylesheet" href ="css/main.css" >
        <!--Link to the external Bootstrap CSS file-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!--Link to external javascript-->
        <script src = "javascript/main.js"></script>
        <!--Link to the external Bootstrap Javascript file-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <!--Assume that screen width is larger than 992px-->
                <div class="bg-white rounded col-lg-10 offset-lg-1 display_body">
                    <div class="title">
                        <h1> r/Business </h1>
                    </div>

                    <div class="page_switch rounded" onclick="get_posts(1)">
                        <a href="javascript:void(0)">
                            <img  src="public/image/upCircle.png" alt="old_post">
                        </a>
                    </div>
                    <input id="before" type="hidden" value="">
                    <input id="after" type="hidden" value="">
                    <div id="post_area">

                    </div>
                    <div class="page_switch rounded" onclick="get_posts(2)">
                        <a href="javascript:void(0)">
                            <img  src="public/image/downCircle.png" alt="new_post">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div id="snackbar">No more post available</div>
    </body>
</html>