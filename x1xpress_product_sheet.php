<?php
	// Message Vars
	$msg = '';
	$msgClass = '';


	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$firstName = htmlspecialchars($_POST['user-firstName']);
        $lastName = htmlspecialchars($_POST['user-lastName']);
		$businessEmail = htmlspecialchars($_POST['user-email']);
		$company = htmlspecialchars($_POST['user-company']);



        if( filter_var($businessEmail, FILTER_VALIDATE_EMAIL) ){
            //Valid Email:
            $parts = explode("@",$businessEmail);

            /*
                * You may want to use in_array if you already have a compiled array
                * The switch statement is mainly used to show visually the check.
            */
            switch(strtolower($parts[1])){
                case 'facebook.com':
                case 'gmail.com':
                case 'googlemail.com':
                case 'yahoo.com':
                case 'aol.com':
                case 'msn.com':
                case 'hotmail.com':
                case 'live.com':
                case 'flueid.com':
                    //block email address here
                    $msg = 'Please use a valid email.';
				    $msgClass = 'alert-danger';
                break;


                default:
                    // if success, send email notif.
                    // Passed
                    $toEmail = 'roy.wittig@devwlticsites.com';
                    $subject = 'X1 Xpress Product Sheet: '.$firstName.' '.$lastName;
                    $body = '<h2>Contact Request</h2>
                        <hr />
                        <h4>Name</h4><p>'.$firstName.' '.$lastName.'</p>
                        <hr />
                        <h4>Email</h4><p>'.$businessEmail.'</p>
                        <hr />
                        <h4>Company</h4><p>'.$company.'</p>
                    ';

                    // Email Headers
                    $headers = "MIME-Version: 1.0" ."\r\n";
                    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                    // Additional Headers
                    $headers .= "From: " .$firstName.' '.$lastName."<".$businessEmail.">". "\r\n";



                    if(mail($toEmail, $subject, $body, $headers)){
                        // Email Sent
                        $msg = 'Your email has been sent';
                        $msgClass = 'alert-success';

                        echo "<iframe src=\"https://wlticsites.com/X1Splash/wp-content/uploads/2021/06/X1-Xpress-Product-Sheet-04.21.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
                        
                    } else {
                        // Failed
                        $msg = 'Your email was not sent';
                        $msgClass = 'alert-danger';
                    }
                break;
            }
        }
        
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>X1 Xpress Product Sheet &#8211; X1 Analytics</title>
</head>
<body>




<!-- start of mobile navbar -->
<div class="d-md-none d-lg-none">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-2">
            <nav class="nav p-2 m-2">
                <a class="nav-link" href="index.php#home">HOME</a>
                <a class="nav-link" href="index.php#soluttions">SOLUTIONS</a>
                <a class="nav-link" href="index.php#contact">CONTACT</a>
            </nav>
        </div>
    </div>
</div>
<!-- end of mobile navbar -->

<nav id="x1__nav" class="nav p-5">
    <a class="nav-link" href="index.php#home">HOME</a>
    <a class="nav-link" href="index.php#solutions">SOLUTIONS</a>
    <a class="nav-link" href="index.php#contact">CONTACT</a>
</nav>





<section class="mb-5">
    <div class="text-center">
        <h3>Download Product Sheet – X1 Xpress</h3>
        <h5>Please enter information to download X1 Xpress Product Sheet</h5>
    </div>

    <form style="max-width:600px; margin: 0 auto; margin-top: 90px;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="mb-3">
            <label for="exampleFirstName" class="form-label">First Name</label>
            <input name="user-firstName" value="<?php echo isset($_POST['user-firstName']) ? $firstName : ''; ?>" type="text" class="form-control" id="exampleFirstName" aria-describedby="first-name">
        </div>
        <div class="mb-3">
            <label for="exampleLastName" class="form-label">Last name</label>
            <input name="user-lastName" value="<?php echo isset($_POST['user-lastName']) ? $lastName : ''; ?>" type="text" class="form-control" id="exampleLastName" aria-describedby="last-name">
        </div>
        <div class="mb-3">
            <label for="businessEmail" class="form-label">Business email address</label>
            <input name="user-email" value="<?php echo isset($_POST['user-email']) ? $businessEmail : ''; ?>" type="email" class="form-control" id="business-email" aria-describedby="email-text">
        </div>
        <div class="mb-3">
            <label for="companyName" class="form-label">Organization/Company Name</label>
            <input name="user-company" value="<?php echo isset($_POST['user-company']) ? $company : ''; ?>" type="text" class="form-control" id="company-name" aria-describedby="company-text">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
     <?php if($msg != ''): ?>
        <div style="max-width:400px; margin: 0 auto; margin-top:10px;" class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif; ?>

</section>



<section class="x1__section6" style="margin-top: 250px;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img width="35%" src="https://www.devwlticsites.com/x1analytics2/wp-content/uploads/2021/05/x1-Circle-Dark-01.svg" alt="">
            </div>
        </div>
        <div class="row pt-3 pb-5">
            <div class="col-sm-12 text-center social-icons">
                <a href="https://www.twitter.com/x1analytics" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>

                <span style="padding:0 5px;"></span>
                
                <a href="https://www.linkedin.com/company/x1-analytics" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                
            </div>
        </div>
    </div>
</section>
    


<section class="x1__section7">
    <article style="padding:10px 0;" >
        <ul>
            <li><a style="font-size:12px;" href="https://www.devwlticsites.com/x1analytics2/terms-of-use/" target="_blank" rel="noopener noreferrer">Terms of Use</a></li>
            <li><span> | </span></li>
            <li><a style="font-size:12px;" href="https://www.devwlticsites.com/x1analytics2/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a></li>
        </ul>

        <div class="col-sm-12 text-center">
            <span style="font-size:14px;" class="">Copyright © 2021 X1 Analytics. All Rights Reserved.</span>
        </div>
    </article>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>