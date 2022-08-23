<?php include("includes/header.php")?>
<?php include("includes/connect.php")?>
<!DOCTYPE html>
<html>

<body>
<div class="call-image">
	<div class="call-overlay"> 
		<div class="call-content">
			<div class="container">
				<div id="home-heading">
    	        	<h1 id="home-heading-2" class="right-align">Contact Us</h1>
            	</div>
			</div>
		</div>
	</div>
</div>
<br>
<br><br>
<!--contect Section-->
 <div class="lip-container">
        <div class="line">
            <img src="images/line.png" alt="">
        </div>
        <div class="leep-1">
            <img src="images/leep.png" alt="">
        </div>
        <div class="leep-2">
            <img src="images/leep.png" alt="">
        </div>
    </div>
    <br><br><br><br><br>
<!--contect Section-->
	<div class="row container">
		<div class="col s12 l5">
			<h2 class="indigo-text text-darken-4">Get In Touch</h2>
				<h3 class="red-text">GIRNAR ROPEWAY</h3>
					<p> <i class="material-icons prefix">home</i>  Taleti Road, Bhavnath</p>
					<p> <i class="material-icons prefix">phone</i> Mo:- +91 95106 60995</p>
					<p> <i class="material-icons prefix">mail</i>  E-mail:- info.girnar_ropeway@gmail.com</p>
		</div>

		<!--Form Section-->
			<div class="col s12 l5 offset-l2">
				<form method="post">
					<!--name Part-->
					<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" id="text" name="name" required="">
							<label for="text">Enter Name</label>
					</div>
					<!--email part-->
					<div class="input-field">
							<i class="material-icons prefix">mail</i>
							<input type="email" id="email" name="email" required="">
							<label for="email">Enter E-mail</label>
					</div>
					<!--Number part-->
					<div class="input-field">
							<i class="material-icons prefix">phone</i>
							<input type="text" id="text" name="mobile" required="">
							<label for="text">Enter Number</label>
					</div>
					<!--message part-->
					<div class="input-field">
							<i class="material-icons prefix">message</i>
							<textarea id="message" class="materialize-textarea" cols="30" rows="10" name="message" required=""></textarea>
							<label for="message">Enter Message</label>
					</div>
					<!--button-->
					<input type="submit" id="su" class="blue btn" name="sub" value="Send">
				</form>
			</div>
	</div>
<?php

	if(isset($_POST['sub']))
	{

		$n=$_POST['name'];
		$e=$_POST['email'];
		$m=$_POST['mobile'];
		$me=$_POST['message'];
		
		$insert=$con->prepare("insert into contact (name,mobile,email,message) values (:name,:mobile,:email,:message)");
		$insert->bindparam(':name',$n);
		$insert->bindparam(':email',$e);
		$insert->bindparam(':mobile',$m);
		$insert->bindparam(':message',$me);
		$insert->execute();
		echo ("<script>alert('Success')</script>");

	}
?>
<?php include("includes/footer.php")?>




</body>

</html>