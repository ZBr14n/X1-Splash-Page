<?php
	// Message Vars
	$msg = '';
	$msgClass = '';


	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['user-fullName']);
		$email = htmlspecialchars($_POST['user-email']);
		$message = htmlspecialchars($_POST['user-comments']);
        
        
		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'roy.wittig@devwlticsites.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
                    <hr />
					<h4>Name</h4><p>'.$name.'</p>
                    <hr />
					<h4>Email</h4><p>'.$email.'</p>
                    <hr />
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		}
	}



    // email contact form #2
    // Check For Submit
    $msg2 = '';
    $msgClass2 = '';
	if( isset($_POST['x1__section4-email']) ){
        

        $email2 = htmlspecialchars($_POST['x1__section4-email']);
        
		// Check Required Fields
		if(!empty($email2)){
			// Passed
			// Check Email
			if(filter_var($email2, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg2 = 'Please use a valid email';
				$msgClass2 = 'alert-danger';
			} else {
				// Passed
				$toEmail2 = 'roy.wittig@devwlticsites.com';
				$subject2 = 'New Mailing List Subscription Entry';
				$body2 = '<h4>Email</h4><p>'.$email2.'</p>';

				// Email Headers
				$headers2 = "MIME-Version: 1.0" ."\r\n";
				$headers2 .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers2 .= "<".$email2.">". "\r\n";

				if(mail($toEmail2, $subject2, $body2, $headers2)){
					// Email Sent
					$msg2 = 'Your email has been sent';
					$msgClass2 = 'alert-success';
				} else {
					// Failed
					$msg2 = 'Your email was not sent';
					$msgClass2 = 'alert-danger';
				}
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
        <meta name="Description" content="X1 Analytics - Title Xccelerated"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <title>X1 Analytics - Title Xccelerated</title>

        <!-- google fonts - Oxygen Sans (font style) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        

    </head>

<body style="overflow-x: hidden;">

    <section class="x1__section1" id="#">

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
                        <a class="nav-link" href="#home">HOME</a>
                        <a class="nav-link" href="#solutions">SOLUTIONS</a>
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end of mobile navbar -->

        <nav id="x1__nav" class="nav p-5">
            <a style="color: #8ad040;" class="nav-link" href="#home">HOME</a>
            <a style="color: #8ad040;" class="nav-link" href="#solutions">SOLUTIONS</a>
            <a style="color: #8ad040;" class="nav-link" href="#contact">CONTACT</a>
        </nav>
        
        
        <article class="x1__section1-headers m-sm-5">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 d-sm-flex justify-content-sm-center d-md-flex justify-content-md-center">
                        <img width="300px" src="https://www.devwlticsites.com/x1analytics2/wp-content/uploads/2021/05/X1-Analytics-Large-01.svg" alt="" class="" />
                    </div>
                    
                    <div class="col-sm-12 m-3">
                        <h3 style="width:330px;">Powered by its proprietary data analytics engine,<br /> X1 Analytics<span style="font-size: 14px;position: absolute;">&reg;</span><span>&nbsp;</span> delivers fast, reliable and cost-effective tools to drive instant title decisions and close real estate transactions more quickly.</h3>
                    </div>

                    <div class="col-sm-12 x1__section1-lists">
                        <ul style="width: 300px; font-size: 21px;">
                            <li>Instant title decision leader with proven, tested results</li>
                            <li>Deep history with millions of transactions processed</li>
                            <li>Trusted partner of top national title agencies and underwriters</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </article>
    </section>



    <section class="x1__section2">
        
        <article>

            <h5 class="p-5 text-center" id="solutions" style="font-weight: bold;">Data-driven solutions to instant title decisions and Xpedited Title <br /> Commitments</h5>
            
            <div class="d-flex justify-content-center">
                <img src="https://www.devwlticsites.com/x1analytics2/wp-content/uploads/2021/05/X1-Machine-Illustration-v3_r3-01.svg" class="img-fluid" width="500" alt="" />
            </div>
            
        </article>



        <article id="x1__section2-infobox">
            <div class="container-fluid" style="max-width:98%;">
                <div class="row">
                    <div class="col-sm-12 col-md-4 text-center" data-aos-once="true" data-aos="fade-right" data-aos-duration="2000" data-aos-eatings="ease-in">
                        <img width="196.24" height="49.83" src="https://www.devwlticsites.com/x1analytics2/wp-content/uploads/2021/05/X1-Xpress-R.svg" class="img-fluid"
                            alt="">
                        <p class="text-center">A powerful data analytics tool that expedites title production, minimizes title curative issues and improves
                            service.</p>

                        <!-- button1 -->
                        <div class="container">
                        
                            <details>
                                <summary>
                                    <div class="button">
                                        LEARN MORE
                                    </div>
                                    <div class="details-modal-overlay"></div>
                                </summary>
                                <div class="details-modal">
                                    <div class="details-modal-close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                    <div class="details-modal-title">
                                    </div>
                                    <div class="details-modal-content text-center">
                        
                                        <p>
                                        <h2>X1 Xpress<span style="font-size: 15px; font-weight: 600; vertical-align:top;">®</span></h2>
                                        <b>Expedite Title Commitment Delivery</b><br><br>
                        
                                        <p style="text-align: left;">Powered by X1 Analytics<span
                                                style="font-size: 10px; font-weight: 600; vertical-align:top;">®</span> proprietary data
                                            analytics engine, X1 Xpress<span
                                                style="font-size: 10px; font-weight: 600; vertical-align:top;">®</span> automates title
                                            decisions, empowering title companies to deliver Title Commitments faster, helping lenders close
                                            more loans more quickly, and reducing the costs associated with title production and title
                                            curative.<br><br>
                        
                                            With X1 Xpress<span style="font-size: 10px; font-weight: 600; vertical-align:top;">®</span>, title
                                            companies can deliver Xpedited Title Commitments in hours instead of days, reduce the headaches
                                            associated with unnecessary title curative work, and create an enhanced title experience for
                                            lenders, borrowers and employees.</p>
                                        </p><br><br>
                                        <a style="text-decoration:none;" href="http://www.devwlticsites.com/x1splash/x1xpress_product_sheet.php"
                                                target="_blank">Download Product Sheet</a>
                                        <br><br>
                                    </div>
                                </div>
                            </details>
                            
                        </div>
                    </div>
                    <div id="x1__section2__middle-box" class="col-sm-12 col-md-4 text-center" data-aos-once="true" data-aos="fade-up" data-aos-duration="2000" data-aos-eatings="ease-in">
                        <img width="322.7" height="53.51" src="https://www.devwlticsites.com/x1analytics2/wp-content/uploads/2021/05/X1-LAR-R.svg" class="img-fluid"
                            alt="">
                        <p>Enables lenders to identify borrowers within their servicing portfolio who qualify for Xpress Closing.</p>
                        <!-- button2 -->
                        <div class="container">
                        
                            <details>
                                <summary>
                                    <div class="button">
                                        LEARN MORE
                                    </div>
                                    <div class="details-modal-overlay"></div>
                                </summary>
                                <div class="details-modal">
                                    <div class="details-modal-close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                    <div class="details-modal-title">
                                    </div>
                                    <div class="details-modal-content text-center">
                                        <h2 style="margin-top: 20px;">X1 Lender Account Review<span
                                                style="font-size: 15px; font-weight: 600; vertical-align:top;">®</span></h2>
                                        <b>Improve Borrower Retention Rates</b><br><br>
                        
                                        <p style="text-align: left">Powered by X1 Lender Xpress<span
                                                style="font-size: 10px; font-weight: 600; vertical-align:top;">®</span> and its proprietary data
                                            analytics engine, the Lender Account Review Service identiﬁes loans in a lender’s portfolio that
                                            qualify for express real estate title insurance processing and can move to close more quickly. By
                                            identifying loans that can be expedited to close, Lender Account Review Service<span
                                                style="font-size: 10px; font-weight: 600; vertical-align:top;">®</span> allows lenders to send
                                            more targeted offers and provide borrowers with more accurate closing date estimates.</p>
                                        </p><br><br>
                                        <a style="text-decoration:none;" href="http://www.devwlticsites.com/x1splash/x1_lender_account_product_sheet.php"
                                            target="_blank">Download Product Sheet</a><br><br>
                        
                                    </div>
                                </div>
                            </details>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center" data-aos-once="true" data-aos="fade-left" data-aos-duration="2000" data-aos-eatings="ease-in">
                        <img width="290.56" height="54.78" src="https://www.devwlticsites.com/x1analytics2/wp-content/uploads/2021/05/X1-ITD-R.svg" class="img-fluid"
                            alt="">
                        <p>Provides Lenders with Instant Title Decisions at Point of Sale or Loan Setup including “Clear to Close”.</p>
                        <!-- button3 -->
                        <div class="container">
                            <details>
                                <summary>
                                    <div class="button">
                                        LEARN MORE
                                    </div>
                                    <div class="details-modal-overlay"></div>
                                </summary>
                                <div class="details-modal">
                                    <div class="details-modal-close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                    <div class="details-modal-title">
                        
                                    </div>
                                    <div class="details-modal-content text-center">
                                        <h2 style="margin-top: 20px;">X1 Instant Title Decision<span
                                                style="font-size: 15px; font-weight: 600; vertical-align:top;">®</span></h2>
                                        <b>Provide Lenders with Instant Title Decisions</b><br><br>
                                        <p style="text-align: left">Provides instant transparency on title condition – including those that are
                                            “Clear to Close” – so lenders can better manage pipelines, schedule closings more efficiently, and
                                            close loans faster.</p>
                        
                                        </p><br><br>
                                    </div>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
        </article>

    </section>
    

    <section class="x1__section3" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center text-white mb-5">
                    <h1 class="fw-bolder">Ready to learn more?</h1>
                </div>

                <div class="col-sm-12">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    Send Us A Message
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#accordionExample">
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Full Name*</label>
                                            <input required type="text" value="<?php echo isset($_POST['user-fullName']) ? $name : ''; ?>" class="form-control" name="user-fullName" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email*</label>
                                            <input required type="email" value="<?php echo isset($_POST['user-email']) ? $email : ''; ?>" class="form-control" name="user-email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="comments" class="form-label">Comment or Message*</label>
                                            <textarea required value="<?php echo isset($_POST['user-comments']) ? $message : ''; ?>" class="form-control" name="user-comments"></textarea>
                                            <!-- <input required type="text" value="<?php //echo isset($_POST['user-comments']) ? $message : ''; ?>" class="form-control" name="user-comments"> -->
                                        </div>
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of accordion -->
                    <?php if($msg != ''): ?>
                        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                    <?php endif; ?>

                </div>

                
            </div>
        </div>
    </section>



    <section class="x1__section4" id="x1__section4-form-area">
        <div class="container" style="margin-top: 100px;">
            <div class="row text-center">
                <div class="header col-sm-12 mb-3">STAY IN TOUCH</div>

                <div class="col-sm-12 mb-5">Don't miss out! Be the first to know about new products, updates, and more.</div>
                <div class="col-sm-12">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#x1__section4-form-area">
                        <div class="mb-3">
                            <input name="x1__section4-email" value="<?php echo isset($_POST['x1__section4-email']) ? $email2 : ''; ?>" placeholder="Your email" type="email" class="form-control" aria-describedby="emailHelp">
                        </div>
                        
                        <button name="submit" type="submit" style="margin-bottom: 20px;" class="subscribe-btn">Subscribe</button>
                    </form>
                    <?php if($msg2 != ''): ?>
                        <div class="alert <?php echo $msgClass2; ?>"><?php echo $msg2; ?></div>
                    <?php endif; ?>
                </div>

                
            </div>
        </div>
    </section>




    <section class="x1__section5 mt-5">
        <div class="container-fluid">
            <div class="row text-center x1__section5-wrapper">
                <div class="col-sm-12 col-md-4">
                    <i class="fas fa-phone-volume" aria-hidden="true"
                        style="border: 0px solid ; border-radius: 0px; background: #8cc644; width: px; height: px; line-height: 0px; font-size: 50px; color: #363941;"></i>

                    <h6>GIVE US A CALL</h6>
                    <h4>833-558-2268</h4>
                </div>
    
                <div class="col-sm-12 col-md-4">
                    <i class="fas fa-headset" aria-hidden="true"
                        style="border: 0px solid ; border-radius: 0px; background: #8cc644; width: px; height: px; line-height: 0px; font-size: 50px; color: #363941;"></i>

                    <h6>NEED SUPPORT?</h6>
                    <h4>support@x1analytics.com</h4>
                </div>

                <div class="col-sm-12 col-md-4">
                    <i class="fas fa-question-circle" aria-hidden="true"
                        style="border: 0px solid ; border-radius: 0px; background: #8cc644; width: px; height: px; line-height: 0px; font-size: 50px; color: #272930;"></i>

                    <h6>WANT TO HEAR MORE?</h6>
                    <h4>GetX1Xpress@x1analytics.com</h4>
                </div>
            </div>
        </div>
    </section>


    <section class="x1__section6">
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
    

    <a href="#" class="back-to-top text-center" style="display:none;">
        <span style="margin-top: 7px;" class="fa fa-angle-up" aria-label="Scroll to the top of the page"></span>
    </a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     

<script type="text/javascript">
    // detect if user is using IE
    function msieversion() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > -1 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){  // If Internet Explorer, return version number
        
            // alert(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
            if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) { 

                window.location = 'microsoft-edge:' + window.location;
                setTimeout(function() {
                    window.location = 'https://go.microsoft.com/fwlink/?linkid=2135547';
                }, 1);
            }
            
            alert('This website is using Bootstrap v5.0 and has dropped support for IE, you will be directed to Microsoft Edge browser instead.')
            
        }

        return false;
    }

    function scrollToAnchor (url) {
        var urlHash = url.split('#')[1];
        if (urlHash &&  $('#' + urlHash).length) {
                $('html').animate({
                    scrollTop: $('#' + urlHash).offset().top + 55
                }, 0);
        }
    }
    
    // back to top button
    $(document).ready(function () {
          scrollToAnchor(window.location.href);

            //Check to see if the window is top if not then display button
            $(window).scroll(function () {

                // Show button after 100px
                var showAfter = 100;
                if ($(this).scrollTop() > showAfter) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });

            //Click event to scroll to top
            // $('.back-to-top').click(function () {
            //     $('html, body').animate({ scrollTop: 0 }, 800);
            //     return false;
            // });

            $('.back-to-top').click(function(){
                if ($(document).scrollTop() != 0) {
                    $("html, body").animate({ scrollTop: 0 }, 0);
                }
                return false;
            });

    });



    $('.nav-link').click(function (event) {
        event.preventDefault(); // stop the browser from snapping to the anchor
        scrollToAnchor(event.target.href);
    });
    msieversion()
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
    disable: function() {
    var maxWidth = 768;
    return window.innerWidth < maxWidth;
  }
});

</script>

</body>
</html>