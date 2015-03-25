<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Static Navbar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
    footer {
            color: #666;
            background: #222;
            padding: 17px 0 18px 0;
            border-top: 1px solid #000;
        }
        footer a {
            color: #999;
        }
        footer a:hover {
            color: #efefef;
        }
        .footerp{
        	text-align: center;
        }
</style>
</head> 
<body>
<div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Brand</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
            	<li><a href="#">Sign Up</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </nav>
</div>

<footer>
      <div class="container">
        <p class="footerp">Put together in less than five minutes by <a href="http://chandrasekharreddy.me/" rel="author">Chandrasekhar</a>. Uses <a href="http://twitter.github.com/bootstrap/" rel="external">Twitter Bootstrap</a> </p>
      </div>
    </footer>
</body>
</html>                                		