<?php

require_once "config.php";
$errorMsg=NULL;
$registerMsg=NULL;
if(isset($_POST['btn_register'])) //check button name "btn_register" and set this
{
 $username = $_POST['txt_username']; //textbox name "txt_username"
 $email  = $_POST['txt_email']; //textbox name "txt_email"
 $password = $_POST['txt_password']; //textbox name "txt_password"
 $role  = $_POST['txt_role']; //select option name "txt_role"
  
 if(empty($username)){      
  $errorMsg="please enter username"; //check username textbox not empty or null
 }
 else if(empty($email)){      
  $errorMsg="please enter email"; //check username textbox not empty or null
 }
 else if(empty($password)){      
  $errorMsg="please enter password"; //check username textbox not empty or null
 }
 else if(empty($role)){      
  $errorMsg="please enter role"; //check username textbox not empty or null
 }
else{
  
   $select_stmt = "SELECT username FROM customerlogin 
          WHERE username='$username' OR email='$email'"; // sql select query
      //bind parameters
   $query = mysqli_query($link, $select_stmt);
   $select_stmt2 = "SELECT email FROM customerlogin 
          WHERE username='$username' OR email='$email'"; // sql select query
      //bind parameters
   $query2 = mysqli_query($link, $select_stmt2);
   
   if(mysqli_num_rows($query)>0){
    $errorMsg="Sorry username already exists"; //check new user type username already exists or not in username textbox
   }

   else if(mysqli_num_rows($query2)>0){
    $errorMsg="Sorry email already exists"; //check new user type email already exists or not in email textbox
   }
   
   else
   {
    $insert_stmt="INSERT INTO customerlogin(username,email,password,role) VALUES('$username','$email','$password','$role')"; //sql insert query     

    
    if(mysqli_query($link,$insert_stmt))
    {
     $registerMsg="Register Successfully.....Wait Login page"; //execute query success message
     header("refresh:4;index.php"); //refresh 4 second and redirect to index.php page
    }
   }
  }
  
}

?>
<!DOCTYPE html>
<html style="font-size:16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="GeoArc">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Signup</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Signup.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Rectangle_1.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Signup">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-align-center-sm u-align-center-xs u-clearfix u-header u-sticky u-sticky-ab29 u-header" id="sec-7a4d" data-image-width="1600" data-image-height="845"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="303" data-image-height="79">
          <img src="images/Rectangle_1.png" class="u-logo-image u-logo-image-1">
        </a>
        <h1 class="u-custom-font u-font-playfair-display u-text u-text-body-alt-color u-text-1">GeoArc</h1>
        <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem;">
            <a class="u-button-style u-nav-link" href="#">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About-Us.php" style="padding: 10px 20px;">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="loginpage.php" style="padding: 10px 20px;">LOGIN</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-Us.php" style="padding: 10px 20px;">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="loginpage.php" style="padding: 10px 20px;">LOGIN</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d4c2"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d4c2"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7066"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7066"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cc1a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-cc1a"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_5fdc" data-image-width="1200" data-image-height="706">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-40 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <h6 class="u-text u-text-default u-text-1">Sign Up</h6>
                  <form method="post" class="form-horizontal" name="myform"onsubmit="return validate()">
     
 <div class="form-group">
 <label class="col-sm-3 control-label">Userame</label>
 <div class="col-sm-6">
 <input type="text" name="txt_username" class="form-control" placeholder="enter username" />
 </div>
 </div>
    
 <div class="form-group">
 <label class="col-sm-3 control-label">Email</label>
 <div class="col-sm-6">
 <input type="text" name="txt_email" class="form-control" placeholder="enter email"  />
 </div>
 </div>
     
 <div class="form-group">
 <label class="col-sm-3 control-label">Password</label>
 <div class="col-sm-6">
 <input type="password" name="txt_password" class="form-control" placeholder="enter passowrd" />
 </div>
 </div>
     
 <div class="form-group">
 <label class="col-sm-3 control-label">Select Type</label>
 <div class="col-sm-6">
  <select class="form-control" name="txt_role">
   <option value="" selected="selected"> - select role - </option>
   <option value="customer">Customer</option>
   <option value="architects">Architects</option>
  </select>
 </div>
 </div>
    
 <div class="form-group">
 <div class="col-sm-offset-3 col-sm-9 m-t-15">
 <input type="submit"  name="btn_register" class="btn btn-primary " value="Register">
 </div>
 </div>
 <?php echo"$errorMsg"; ?>
 <?php echo"$registerMsg"; ?>
 <div class="form-group">
 <div class="col-sm-offset-3 col-sm-9 m-t-15">
 You have a account register here? <a href="index.php"><p class="text-info">Login Account</p></a>  
 </div>
 </div>
     
</form>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      function validate(){
       var x=document.myform.txt_email.value;  
                var atposition=x.indexOf("@");  
                var dotposition=x.lastIndexOf(".");  
                if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
                  {  
                    alert("Please enter a valid e-mail address");  
                    return false;  
                    
                  } 
                  else{return true;}}
    </script>
    <section class="u-align-center u-clearfix u-palette-5-dark-3 u-section-7" id="carousel_3c1e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-oswald u-text u-text-palette-2-base u-text-1">GeoArc</h2>
        <h5 class="u-text u-text-default u-text-2">We are looking forward to start a project with you!&nbsp;<br>
        </h5>
      </div>
    </section>    
  </body>
</html>