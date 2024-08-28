<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!--Bootstrap CSS for a responsive Webpage-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!--Navigation bar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="me.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.html">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Main container-->
    <div class="container mt-4">
        <div id="home" class="mt-4">
            <h2>Home</h2>
            <p>Welcome to the Home section.</p>
        </div>
        
        <div id="about" class="mt-4">
            <h2>About</h2>
            <p>Learn more about us in the About section.</p>
        </div>
        <div id="sign-up" class="mt-4">
            <h2>Sign Up</h2>
            <form id="sign-up-form">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>

        <div id="sign-in" class="mt-4">
            <h2>Sign In</h2>
            <form id="sign-in-form">
                <div class="form-group">
                    <label for="username-signin">Username:</label>
                    <input type="text" class="form-control" id="username-signin" name="username-signin">
                </div>
                <div class="form-group">
                    <label for="password-signin">Password:</label>
                    <input type="password" class="form-control" id="password-signin" name="password-signin">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>
    
    <!--Bootstrap JS, Popper.js, jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
