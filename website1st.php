<!DOCTYPE html>

    <head>
        
<!--title-->
        <title>MAYA SITE</title>
    
<!--BOOTSTRAP-->    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style type="text/css"> 
    #navbar ul li a:hover 
	{ 
	 color: white; 
	 background-color: black; 
	 }
		#nav li a.currentFont{
    background-color:#143D17;
     color:#FFFFFF;
	 
	}  
    div#top{ font-family:courier new;background-color:rgba(0,0,0,00); text-align:left; font-size:20px; font-weight:bold; color:white; margin:15 auto;}
    </style> 

         	
   
    <!--css background decoration-->
        <style>
           
        body {
            background-image: url("maya.jpg");
            background-repeat: no-repeat;
            background-size: 1366px 800px;
        }
        </style>
               
    </head>
    
    <body>
        
                
<!--Navigation bar drop-down -->  
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            </div>
        
<!--Navigation bar drop-down -->  
       

                <div id="navbar"> 
				<div class="collaps navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="#home"> <span style="cursor:pointer"> HOME </span></a></li>
                     <li><a href="http://www.gdstuds.tk" > <span style="cursor:pointer">SYLLABUS </span></a></li>
                     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="cursor:pointer"> MAYA <span class="caret"></span></span></a>
                     <ul class="dropdown-menu">
                         <li>	<a href="https://www.google.co.in/search?q=mayan+calendar&safe=active&espv=2&biw=1366&bih=643&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwiRqveb6v_LAhXBv44KHRVVA20Q_AUIBigB"> <span style="cursor:pointer">Calendar </span></a> </li>
                         <li><a href="https://en.wikipedia.org/wiki/List_of_Maya_sites#Most_important_sites"> <span style="cursor:pointer">SITES </span></a></li>
                         <li><a href="https://en.wikipedia.org/wiki/Maya_civilization"> <span style="cursor:pointer">Civilization </span></a></li>
                         <li><a href="https://www.google.com/search?q=mayan+predictions"> <span style="cursor:pointer">Predictions </span></a></li>
                         <li><a href="image.html"> <span style="cursor:pointer">Images </span></a></li>
                     </ul>
                    </li>  
                    <li><a href="about.html" > <span style="cursor:pointer">ABOUT US </span></a></li> 
                     <li><a href="contactus.html"> <span style="cursor:pointer">CONTACT US </span></a></li>
                </ul> 
                 <!--Navigation bar right-side glyphicon-->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.html"> <span style="cursor:pointer">Logout <span class="glyphicon glyphicon-log-out"></span></span></a>
                        
                            </div>
                <!--css background decoration-->
        <style>
           
        body {
            background-image: url("maya.jpg");
            background-repeat: no-repeat;
            background-size: 1366px 800px;
        }
        </style>
        </div>
		
                </div>
            <div>
			</div>
        </nav><br><br><br><br> 
			  
			  
		<div id="top"> 
		 Welcome <?php if(!empty($_POST["lusername"]))
	                   echo $_POST["lusername"];
		         ?>
		 </div>
			  
			  
    </body>
    </html>
