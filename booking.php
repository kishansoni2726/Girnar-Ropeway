<?php include("includes/header.php")?>
<?php include("includes/connect.php")?>
<?php
$des=$_POST['destination'];
$date=$_POST['jdate'];
$mem=$_POST['member'];
$time=$_POST['timeslt'];

$select=$con->prepare("SELECT ticketprice FROM destination where placename='$des' ");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
while($data=$select->fetch()){
$ticketprice =  $data['ticketprice'];
}

$amount = $ticketprice * $mem;
?>
<!DOCTYPE html>
<html>
<body>
<div class="call-image">
	<div class="call-overlay"> 
		<div class="call-content">
			<div class="container">
				<div id="home-heading">
    	        	<h1 id="home-heading-2" class="right-align">Book Ticket</h1>
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
    <br><br><br>
<div>	<h3 class="red-text">&nbsp;&nbsp;&nbsp;Book Ropeway Ticket</h3>
	</div>
	<div>
		<div class="row container">
    <div class="col s12 m6 l12">
    <div class="card ">
        <div class="card-content">
          <form class="" method="post" action="payment/pay.php">
          	<div class="row">
					
					<div class="col l6 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">add_location</i>
							<input type="text" id="text" name="destination" value="<?php echo $des;?>" readonly="">
						</div>
					</div>
					<div class="col l6 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">date_range</i>
							<input type="text" id="text" name="date"  value="<?php echo $date;?>" readonly="">
						</div>
					</div>
					<div class="col l4 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">event_seat</i>
							<input type="text" id="text" name="member" value="<?php echo $mem;?>" readonly="">
						</div>
					</div>
					<div class="col l4 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">access_time</i>
							<input type="text" id="text" name="timeslot" value="<?php echo $time;?>" readonly="">
						</div>
					</div>

						<div class="col l4 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">payment</i>
							<input type="text" id="text" name="price" value="<?php echo $amount;?>" readonly="">
						</div>
					</div>          	
				</div>
				<h3 class="red-text">&nbsp;&nbsp;&nbsp;Fill Personal Info</h3>
          		<div class="row">
          			<div class="col l6 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" id="text" name="name" required="">
							<label for="text">Enter Name</label>
						</div>
					</div>
					
					<div class="col l6 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">mail</i>
							<input type="email" id="email" name="email" required="">
							<label for="email">Enter E-mail</label>
						</div>
					</div>
          		</div>

				<div class="row">
          			<div class="col l4 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">phone</i>
							<input type="text" id="text" name="phone" required="">
							<label for="text">Enter Name</label>
						</div>
					</div>
					
					<div class="col l4 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">add_location</i>
							<input type="text" id="email" name="city" required="">
							<label for="email">Enter E-mail</label>
						</div>
					</div>

					<div class="col l4 m4 s12">
          				<div class="input-field">
							<i class="material-icons prefix">fiber_pin</i>
							<input type="text" id="email" name="pincode" required="">
							<label for="email">Enter pincode</label>
						</div>
					</div>
          		</div>
<!--note-->
        <div class="row">
          <div class=" col s12">
            <span class="red-text">No cancellation is allowed, however, rescheduling can be done upto 24 hrs.Before the date of journey. </span>
          </div>
        </div>
      <!--terms & condition follow-->
        <div class="row">
          <p>
            <label>
              <input type="checkbox" checked="checked" />
                <span>I agree to be <a href="#">Terms and condition</a> of Girnar Ropeway.</span>
            </label>
          </p>
        </div>

        <div class="row">
          <p>
            <label>
              <input type="checkbox" checked="checked" />
                <span>I agree to receive Transactional & Promotional SMS.</span>
            </label>
          </p>
        </div>
    <!--button-->
        <div class="row">
        	<input type="submit" name="sub"  value="Pay Now" class="btn red ">   

         </div>
          </form>
      </div>
    </div>
  	</div>
        
      </div>
    </div>
    

<?php include("includes/footer.php")?>




</body>

</html>