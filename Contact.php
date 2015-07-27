
<?php

if ($_POST["submit"]) {



	 	 if (!$_POST['name']) {

			 $error="<br />Please enter your name";

	 	 }

	 	 if (!$_POST['phoneNo']) {

			 $error.="<br />Please enter your Phone Number";

	 	 }

	 	 if (!$_POST['comment']) {

			 $error.="<br />Please enter a short message";

	 	 }

	 	 if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {

 	 	 $error.="<br />Please enter a valid email address";

	 	 }

	 	 if ($error) {

 $result='<div class="alert alert-danger">
    <strong>
        There were error(s)
        in your form:
    </strong>'.$error.'
</div>';

	 	 } else {
		 


 if (mail("kamal.bharti@outlook.com", "Comment from website!", "Name: ".
$_POST['name']."

 Email: ".$_POST['email']."

 Phone Number: ".$_POST['phoneNo']."

 Comment: ".$_POST['comment'])) {

 $result='<div class="alert alert-success">
    <strong>
        Thank
        you!
    </strong> We\'ll be in touch.
</div>';

 } else {

 $result='<div class="alert alert-danger">
    Sorry, there was
    an error sending your message. Please try again later.
</div>';

 }



 }


 }

 ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ganpati Sanitation</title>
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Optional theme -->

    <link href="Scripts/bootstrap-theme.min.css" rel="stylesheet" />
    <!-- Latest compiled and minified JavaScript -->
    <script src="Scripts/bootstrap.min.js"></script>
    <link href="StyleSheet.css" rel="stylesheet" />
    <script src="Scripts/contactInfoValidation.js"></script>
   


</head>
<body>

    <div class="navbar navbar-default pageHeader navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarTags">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">Ganpati Sanitation</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarTags">
                <ul class="nav navbar-nav">
                    <li><a href="kajariaProducts.html"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>  Kajaria Products</a></li>
                    <li><a href="Location.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Location</a></li>
                    <li><a href="Gallery.html"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Gallery</a></li>


                </ul>
                <a class="navbar-right" href="Contact.php"> <p style="color:grey"> <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Contact US</p></a>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrapper col-md-10 col-md-offset-1">
            <div class="col-md-8 col-md-offset-2" style="background-color:#efeded; border-radius: 5px; margin-top:30px;">
                <h2>Click on the following tags to choose the contact method</h2>
                <div id="contactTabs" class="col-md-8 col-md-offset-2">
                    <img class="contactIcon" id="phoneTag" src="Images/call.jpg" />
                    <img class="contactIcon" id="emailTag" src="Images/email.jpg" />
                    <img class="contactIcon" id="facebookTag" src="Images/facebook.jpg" />
                </div>
            </div>
            <div class="ContactInfo hidden col-md-8 col-md-offset-2" style="background-color:#7cf5f1" id="phoneContactInfo">

                <h4 class="col-md-12">
                    CALL US AT:
                    <br />
                    ROHIT AGGARWAL - +91-94142-11716
                    <br />
                    MOHIT AGGARWAL - +91-94606-34541
                </h4>
            </div>

            <div class="ContactInfo hidden col-md-8 col-md-offset-2" style="background-color:#adde6e" id="emailContactInfo">

                        <h4 class="col-md-12">
                            EMAIL US AT: <br />KAJARIAGALAXY@GANPATISANITATION.COM
                        </h4>

                    </div>
            <div class="ContactInfo hidden col-md-8 col-md-offset-2" style="background-color:#90cfee" id="fbContactInfo">

                <h4 class="col-md-12">
                    JOIN US ON FACEBOOK @ <a id="fbGroupLink" href="https://www.facebook.com/groups/1500549476903145/"><u>GANPATISANITATION FACEBOOK GROUP</u></a>
                </h4>

            </div>

        <div class="col-md-8 col-md-offset-2 emailForm">
                
                <?php echo $result; ?>
                <h2 class="lead">YOU CAN ALSO PROVIDE US YOUR INFO AND WE CAN CONTACT YOU</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                               value="<?php echo $_POST['name']; ?>" />
                    </div>
					<div class="form-group">
                        <label for="phoneNo">Your Contact Number:</label>
                        <input type="text" name="phoneNo" class="form-control" placeholder="Enter Your Contact Number"
                               value="<?php echo $_POST['phoneNo']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email address"
                               value="<?php echo $_POST['email']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="comment">Your Message for us:</label>
                        <textarea class="form-control" name="comment">
                            <?php echo $_POST['comment']; ?></textarea>
                    </div>
                    <input type="submit" name="submit" class="col-md-2 col-md-offset-5 btn btn-success btn-lg" value="Submit" />
                </form>
            
    </div>
            </div>
        </div>
        </div>
	<div class="footer">
                    <p>
                        &copy; 2012 GANPATI SANITATION
                    </p>
                </div>
</body>
</html>
