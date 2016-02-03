    		<?php
            	$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$address=$_POST['address'];
				$comments=$_POST['comments'];
				$to='denisenadal@outlook.com';
				$subject='New Contact Form via SpilkerCustomHomes.com';
		

			
				
				$body="Hi, You have a $subject !\n The request is from: \n Name: $fname $lname \n Email: $email \n Phone: $phone  \n \n Comments: \n $comments";


				
				elseif ($_POST['submit']){
					if (mail($to, $subject, $body)){
						header('location: form_successful.html');}
						else { header('location: form_error.html');}
					}
			?>
