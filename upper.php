<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Science Outreach</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/simple-sidebar.css" rel="stylesheet">
    

    <link rel="stylesheet" type="text/css" href="bootstrap.icon-large.min.css">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/iwonder.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
    </script>


</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height: 50px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Science Outreach</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li class="dropdown">
                         <a href="" class="dropdown-toggle" data-toggle="dropdown">Our Story<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               <li><a href="#" style="color:black" style="color:black">About Us</a></li>
                               <li><a href="#" style="color:black" style="color:black">Our Vision </a></li>
                               <li><a href="#" style="color:black" style="color:black">What we do</a></li>
                               <li><a href="#" style="color:black" style="color:black">Our team</a></li>
                               <li><a href="#" style="color:black" style="color:black">Patrons</a></li>
                           </ul>
                    </li>
                   
                    
                    <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get Involved<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               <li><a href="#" style="color:black" style="color:black">Intern</a></li>
                               <li><a href="#" style="color:black" style="color:black">Ambassador </a></li>
                               <li><a href="#" style="color:black" style="color:black">Patron</a></li>
                               <li><a href="#" style="color:black" style="color:black">Donator</a></li>
                           </ul>
                    </li>
                    <li>
                        <a href="contact.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Newsletter</a>
                    </li>
                  
            </div>
        </div> 
    </nav>

    
</body>