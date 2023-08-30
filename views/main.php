<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>Online Portal | Golden Minds Bulacan</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />

		<!-- Open Graph Meta Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"/>
	  <meta name="robots" content="index, follow">
	  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
	  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
	  <meta name="description" content="Golden Minds Online Portal System" />
	  <meta name="abstract" content="Online Portal of Golden Minds Bulacan"  />
	  <meta name="copyright" content="Golden Minds Bulacan"  />
	  <meta name='Classification' content='Education'/>
	  <meta name='identifier-URL' content='https://www.portal.goldenmindsbulacan.com/auth/login/'/>
	  <meta name="msapplication-TileImage" content="https://www.goldenmindsbulacan.com/goldenminds.favicon.png" />
  	<!--<meta name='author' content='Developer: Jerome Avecilla | https://javecilla.github.io/'/>      -->

  	<link rel="shortcut icon" type="image/png" sizes="16x16" href="/resources/images/favicon.png" />

  	 <!-- The SEO Framework by Jerome Avecilla -->
	  <meta property="og:image" content="/resources/images/goldenminds.PNG" />
	  <meta property="og:image:width" content="608">
	  <meta property="og:image:height" content="260">
	  <meta property="og:image:alt" content="Golden Minds Colleges" />
	  <meta property="og:image:secure_url" content="/resources/images/favicon.png"/>
	  <meta property="og:locale" content="en_US">
	  <meta property="og:type" content="website">
	  <meta property="og:title" content="Golden Minds Bulacan" />
	  <meta property="og:description" content="Golden Minds Bulacan Online Portal School System" />
	  <meta property="og:url" content="https://www.portal.goldenmindsbulacan.com/auth/login/" />
	  <meta property="og:site_name" content="Online Portal | Golden Minds Bulacan"/>
	  <meta property="article:author" content="https://www.facebook.com/gmcstamaria2015">
	  <meta property="article:publisher" content="https://www.facebook.com/gmcstamaria2015">


		<!-- Custom Style -->
		<link href="/resources/custom/stylesheet/main_login.css" rel="stylesheet" type="text/css"  defer/>
		<!-- Jquery file -->
  	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
		<!-- Bootstrap file -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" media="screen" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Sweetalert -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet"/>
		<!-- FontAwesome Icons-->
		<link href="/resources/fontawesome/css/all.min.css" rel="stylesheet"/> 
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com"/>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@500&display=swap" rel="stylesheet">
		<!-- Recaptcha -->
	  <script src="https://www.google.com/recaptcha/api.js?render=6LdHn8cnAAAAAKoGw-f3pCmMU27JnkPCEmvnZaTf" defer></script>
	  <!-- GA Google Analytics @ https://m0n.co/ga -->
  	<script async src="https://www.googletagmanager.com/gtag/js?id=338012831"></script>
  	<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', '338012831');
  	</script>
  	<style type="text/css"> 
  		.no-drop {
  			cursor: no-drop!important;
  			user-select: none!important;
  			pointer-events: none!important;
  		}
  		.img-card-top {
  			user-select: none;
  			pointer-events: none;
  		}
  	</style>  
	</head>
	<body oncontextmenu="return false">
		<!-- oncontextmenu="return false"  -->
		<main class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="card login_card">
						<img src="/resources/images/form_header.png" class="img-card-top">
						<div class="card-header login_card_header">
							<p class="card-title notes" >
	              <i class="fas fa-info-circle text-muted"></i> This system is for authorized users only. If you do not have an account, please contact the system administrator to request access. 
	            </p> 
						</div>
						<div class="card-body login_card_body">
							<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" id="loginForm" role="Form">
								<fieldset>
									<div class="form-group">
		                <div class="input-group mb-2">
		                  <i class="fa fa-user icon"></i>
		                  <input type="text" placeholder="Username"  class="username-input-field" 
		                  name="username" id="uname" onpaste="false" autocomplete="off"/> 
		                </div>
		                <div class="input-group " id="show_hide_password">
		                  <span class="fa-solid fa-key icon"></span>  
		                  <input type="password" placeholder="Password" class="password-input-field "
		                  name="password" id="pword" onpaste="false" autocomplete="off"  />
		                  <div class="btn-addon" >
		                    <a href="javascript:void(0)"><i class="fa fa-eye-slash eye-icon"></i></a>
		                  </div>
		                </div>  
	              	</div>
	              	
									   <button class="g-recaptcha login-btn btn mt-2" button="submit" name="login">
								    <span class="button-text">Login</span>
								    <span class="button-disabled" style="display: none;">Try to login again after <span class="countdown"> 60 &nbsp;</span>seconds</span>
								    <i class="fas fa-spinner fa-spin loading-spinner" style="display: none;"></i>
								    <i class="fa-solid fa-right-to-bracket arrow-login"></i>
								</button>


	                <div class="col rounded-2 mt-3 hr"></div>
	                <input type="hidden" class="loginButtonClickCount" value="0" />
	               <div class="developer mt-4 text-center ">
					         	<small class="d-block">&copy; 2010-<span id="currentYear"></span> - Golden Minds Bulacan</small>
					         	<small>Maintain and Manage by Information System</small>
					        </div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>	
		</main>

 		<script defer>
 			$(document).on('submit', '#loginForm', function(e) {
				e.preventDefault(e);
				


				//disable login button form during submission
    		$('#loginForm button[type="submit"]').attr('disabled', 'disabled');

    		//show loading spinner and hide button text
    		$('#loginForm .loading-spinner').show();
    		$('#loginForm .button-text').hide();
    		$('#loginForm .arrow-login').hide();
    		$('#loginForm .login-btn').addClass('no-drop');

        let uname = $('#uname').val();
        let pword = $('#pword').val();
        

        //console.log(uname);  	
        if(isEmpty(uname) || isEmpty(pword)) {
          Swal.fire({
           	title: "",
           	html: "<h4>All fields are required!</h4>",
           	icon: "info" 
          }).then((res) => {
				    $('#loginForm button[type="submit"]').removeAttr('disabled');
						$('#loginForm .loading-spinner').hide();
						$('#loginForm .button-text').show();
						$('#loginForm .arrow-login').show();
						$('#loginForm .login-btn').removeClass('no-drop');
				  });
        } else {
        	//send request to google api:recaptcha
        	grecaptcha.ready(function() {
        		grecaptcha.execute('6LdHn8cnAAAAAKoGw-f3pCmMU27JnkPCEmvnZaTf', {
          		action: 'validateLogin'
          	}).then(function(token) {
          		const formData = new FormData();
           		//formData.append('management', sadmin);
	           	formData.append('uname', uname);
	           	formData.append('pword', pword);
	           	formData.append('ctoken', token);
	           	formData.append('action', 'validateLogin');
	           	//send server request
           		$.ajax({
           			url: "/src/app/Actions/LoginHandler.php",
           			method: "POST",
           			data: formData,
           			dataType: "JSON",
           			processData: false,
          			contentType: false,
          			success: (response) => {
          				const serverResponse = JSON.parse(JSON.stringify(response));
          				try {
          					if(serverResponse.userValidated) {
          						//check specific management and redirect user according to the 
          						//system admin management
          						switch(serverResponse.management) {
          							case 'vs':
          								window.location.href='http://127.0.0.1:2004/global/redirect_user.php?cuser='+encodeURIComponent(uname); 
          								break;

          							case 'ims':
          								window.location.href='http://127.0.0.1:5555/global/redirect_user.php?cuser='+ encodeURIComponent(uname);
          								break;

          							case 'cms':
          								window.location.href='http://127.0.0.1:8585/global/redirect_user.php?cuser='+ encodeURIComponent(uname);
          								break;
          								
          							default:
          								console.log('403 Access to the requested resource is forbidden.');
          								break;
          						}
          					} 
          					// Handle failed login attempts
          					else {
	          					// Increment the button click count
	          					const maxLoginAttempt = parseInt(3);
						    			let loginAttempt = parseInt($('.loginButtonClickCount').val());
						   				loginAttempt++;
						    			$('.loginButtonClickCount').val(loginAttempt);
						    			let remainingLoginAttempt = maxLoginAttempt - loginAttempt;

						    			if(remainingLoginAttempt === 0) {
												Swal.fire({
												  title: "",
												  html: "<h5>You've reached the maximum login attempts!</h5><small>Due to the repeated many login attempts and other suspicious activity, login for your account is temporarily disabled.</small>",
												  icon: "error",
												  focusConfirm: false,
												  confirmButtonColor: '#880808',
												  confirmButtonText: 'Okay'
												}).then((res) => {
												  $('#loginForm button[type="submit"]').attr('disabled', 'disabled');
												  $('#loginForm .button-text').hide();
												  $('#loginForm .button-disabled').show();
												  $('#loginForm .arrow-login').hide();
												  $('#loginForm .loading-spinner').hide();
												  $('#loginForm .login-btn').addClass('no-drop');

												  let countdownValue = 60; //set default countdown value to 60 seconds
												  const countdownElement = $('.countdown'); 

												 	//update the countdown every second
												  const countdownInterval = setInterval(() => {
													  countdownValue--;
													  countdownElement.text(countdownValue + ' ');

													  //re-enable the button and restore original state when countdown reaches 0
													  if(countdownValue === 0) {
													    clearInterval(countdownInterval); // Stop the countdown interval
													    $('.loginButtonClickCount').val(0); 
													    // Enable the login button
													    $('#loginForm button[type="submit"]').removeAttr('disabled');
													    $('#loginForm .button-disabled').hide();
													    $('#loginForm .button-text').show();
													    $('#loginForm .arrow-login').show();
												    	$('#loginForm .login-btn').removeClass('no-drop');
												  	} 
													}, 1000); // Update every 1000ms (1 second)
												});
					    				} else {
					    					Swal.fire({
					           			title: "",
					           			html: `<h5>${serverResponse.message}</h5><small>Remaining Login Attempt: <b>${remainingLoginAttempt}</b></small>`,
					           			icon: "error",
					           			focusConfirm: false,
					           			confirmButtonColor: '#880808',
					           			confirmButtonText: 'Okay'
				           			}).then((res) => {
					           			$('#loginForm button[type="submit"]').removeAttr('disabled');
											    $('#loginForm .loading-spinner').hide();
											    $('#loginForm .button-text').show();
											    $('#loginForm .arrow-login').show();
											    $('#loginForm .login-btn').removeClass('no-drop');
				           			});
					    				}
          					}
          				} catch(error) {
          					Swal.fire({
				           		title: "",
				           		html: `<h5>${error}</h5>`,
				           		icon: "error",
				           		focusConfirm: false,
				           		confirmButtonColor: '#880808',
				           		confirmButtonText: 'Okay'
				           	}).then((res) => {
				           		$('#loginForm button[type="submit"]').removeAttr('disabled');
										  $('#loginForm .loading-spinner').hide();
										  $('#loginForm .button-text').show();
										  $('#loginForm .arrow-login').show();
										  $('#loginForm .login-btn').removeClass('no-drop');
				           	});
          				}
          			}, 
          			error: (xhr, status, error) => {
          				Swal.fire({
				           	title: "",
				           	html: `<h5>${xhr.responseText}<br/>${error.responseText}</h5>`,
				           	icon: "error",
				           	focusConfirm: false,
				           	confirmButtonColor: '#880808',
				           	confirmButtonText: 'Okay'
				          }).then((res) => {
				           	$('#loginForm button[type="submit"]').removeAttr('disabled');
										$('#loginForm .loading-spinner').hide();
										$('#loginForm .button-text').show();
										$('#loginForm .arrow-login').show();
				          });
          			} //error
           		}); //ajax

           		// .done(function(response) {
							//    console.log(response);
							// }).fail(function(xhr, status, error) {
							//    console.log(xhr, status, error);
							// });

          	}); //callback
        	}); //grecaptcha ready
        } //else
			}); //login
 		</script>


		<script type="text/javascript">
		  $(document).ready(function() {
		  	let currentYear = new Date().getFullYear();
				$('#currentYear').text(currentYear);

		  	$('.username-input-field').on('keyup', function() {
				  let inputVal = $(this).val(); 
				  let cleanedVal = inputVal.replace(/[^a-zA-Z0-9]/g, ''); 
				  $(this).val(cleanedVal); 
				});

		    $("#show_hide_password a").on('click', function(e) {
		      e.preventDefault();
		      if($('#show_hide_password input').attr("type") == "text"){
		        $('#show_hide_password input').attr('type', 'password');
		        $('#show_hide_password i').addClass( "fa-eye-slash" );
		        $('#show_hide_password i').removeClass( "fa-eye" );
		      } else if($('#show_hide_password input').attr("type") == "password"){
		        $('#show_hide_password input').attr('type', 'text');
		        $('#show_hide_password i').removeClass( "fa-eye-slash" );
		        $('#show_hide_password i').addClass( "fa-eye" );
		      }
		    });
		  });
		</script>


		<script>
			function isEmpty(input) {
				return input === "";
			}

			function preventBack() {
	  		window.history.forward(); 
			}
			setTimeout("preventBack()", 0);
			window.onunload = function(){null};

			document.onkeydown = function(e) {
		    if(e.keyCode == 123) {
		      return false;
		    }
		    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
		      return false;
		    }
		    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
		      return false;
		    }
		    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
		      return false;
		    }
		    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
		      return false;
		    }      
  		}
		</script>
	</body>
</html>