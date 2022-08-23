
<?php
include("includes/header.php");
include("includes/connect.php");
?>
  <div class="call-image">
  <div class="call-overlay"> 
    <div class="call-content">
      <div class="container">
        <div id="home-heading">
                <h1 id="home-heading-2" class="right-align">Reschdule Ticket</h1>
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
      <div>
    <h3 class="red-text">&nbsp;&nbsp;&nbsp;Enter Your  Tour</h3>
  </div>
<?php
$em=$_POST['email'];
$mem=$_POST['mem'];
$des=$_POST['dest'];
$time=$_POST['timeslot'];

?>
<?php
	$q=$con->prepare("SELECT * FROM booking WHERE email='$em' && member='$mem' && destination='$des' && timeslot='$time' ");
    $q->execute();
    $res=$q->fetchALL(PDO::FETCH_OBJ);
    if($res)
    {
    ?>
    <div class="container">
      <div class="row">
   
       	<form action="rsh.php" method="post">
           <div class="input-field col l3 m4 s8 push-l4" >
       		<input type="hidden" name="em" value="<?php echo $em?>">
    			<select name="timeslot" required="">
                    <option value="" disabled selected>Timeslot</option>
                        <?php
                        	$select=$con->prepare("SELECT timeslab FROM timeslot");
                        	$select->setFetchMode(PDO::FETCH_ASSOC);
                        	$select->execute();
                        	while($data=$select->fetch()){
                        	?>
                        	<option value="<?php echo $data['timeslab']; ?>"><?php echo $data['timeslab'];?></option>
                        	<?php
                        	}
                        ?>

                    	</select>
                    </div>
                       <div class="input-field col l3 m4 s8 push-l4">
    						<input type="submit" name="sub" value="Update" class="btn red">

                  </div>
    		</form>
  	
    </div>
  </div>
  		<?php
  			}
      		else
      		{
         		echo "<script>alert('Please enter correct Information')</script>";
            echo ("<script>window.location.href = 'reschdule.php';</script>");
        		
      		}
  		 ?>
                        
    								<?php include("includes/footer.php");?>