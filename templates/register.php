
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/static/css/home.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/static/css/styloginreg.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">

</head>

<style>
      body{
       
       background-image: url(../static/css/images/p2.jpg);
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
      
   }
   .modal-content{
    background-color:rgba(90, 85, 79, 0.756)!important;
    opacity: .85;
    padding: 0 18px;
    box-shadow: 0px 0px 3px #6d6161;
}
</style>
<body>

        
    <!--Starting of navbar 1-->
    <nav class="navbar navbar-toggleable-sm navbar-inverse nav1">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a href="home.html" class="navbar-brand">FeedReader</a>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                    <a href="/home" class="nav-link nav-log">Home</a>
                </li>
                <li class="nav-item ">
                    <a href="/" class="nav-link nav-log">Articles</a>
                </li>

                <li class="nav-item ">
                        <a href="/sources" class="nav-link nav-log">AddFeed</a>
                    </li>
                    <li class="nav-item ">
                    <a href="/register" class="nav-link nav-log">Register</a>
                </li>    
                <li class="nav-item">
                    <a href="/login" class="nav-link nav-log">LogIn</a>
                </li>
                
            </ul>
            
        </div>
    </nav>
    <!--Ending of navbar 1-->


   

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div>
                    <p style="background-color:rgba(0, 0, 0, 0.76); color: beige; margin-top:-20px; margin-bottom: 10%; border-radius: 1em;  padding: 5%">Sign Up Now</p>
                </div>
                <form method="post" class="col-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Enter Full name" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control"name="email" placeholder="Email-id " required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_1" placeholder="Enter password" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password_2" placeholder="Confirm password" required>
                    </div>
                    <button type="submit" class="btn" name="register">
                        Register</button>
                        
                </form>
                <div class="col-12 forgot">
                    <p>
                        Already a member? <a href="loginsignin.html">Sign in</a>
                    </p>

                </div>

            </div>
            <!--End of modal content-->
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>

</html>