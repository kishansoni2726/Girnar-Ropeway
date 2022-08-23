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
    	        	<h1 id="home-heading-2" class="right-align">Gallery</h1>
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
<div>
      <h4 class="red-text">&nbsp;&nbsp;  Enjoy Junagadh Beautiful Images</h4>
      <br><br>
        <div class="row">
   <?php 
      $stmt=$con->prepare('SELECT image,description FROM image_video');
        $stmt->execute();
        if($stmt->rowCount()>0)
        {
          while($row=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            extract($row);
        
    ?>
  <div class="col l4 m4 s12">
      <div class="card">
        <div class="card-image ">
        <img class="materialboxed effect" width="650" src="admin-panel/uploads/slider/<?php echo $row['image']?>">
        </div>
      </div>
    </div>
      <?php
        }
      }
      ?>
  </div>
</div>




<?php include("includes/footer.php")?>




</body>

</html>