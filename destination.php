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
    	        	<h1 id="home-heading-2" class="right-align">Junagadh View</h1>
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
      <h4 class="red-text">&nbsp;&nbsp;  Enjoy Junagadh Beautiful places</h4>
      <br><br>
   <div class="row">
     <?php 
      $stmt=$con->prepare('SELECT * FROM sight_scene');
        $stmt->execute();
        if($stmt->rowCount()>0)
        {
          while($row=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            extract($row);
        
    ?><div class=" col l4 m6 s12">
                       <img src="admin-panel/uploads/news_event/<?php echo $row['image']?>" class="responsive-img hoverable">
                </div>
      <!--Map Section-->
      <div class="container col l8 m6 s12">
                    <p class="about-section-font red-text"><?php echo $row['placename']?></p>
                      <span class="about-section-p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['description']; ?>
                      </span>
                      <br>
                  </div>
    <!--Date Section-->
                
    <?php
        }
      }
      ?> 
    </div>





<?php include("includes/footer.php")?>




</body>

</html>