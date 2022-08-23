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
    	        	<h1 id="home-heading-2" class="right-align">News & Event</h1>
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
    <br><br><br><br><br>
    <h4 class="red-text">&nbsp;&nbsp;   Stay tuned for latest News & updates.</h4>
<!--contect Section-->
	<!--contect Section-->
    <div class="row">
            
         <?php 
      $stmt=$con->prepare('SELECT * FROM news');
        $stmt->execute();
        if($stmt->rowCount()>0)
        {
          while($row=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            extract($row);
        
    ?>
    <div class="col l3 s12 m6">
      <div class="card hoverable">
       <div class="card-image ">
          <img src="admin-panel/uploads/news_event/<?php echo $row['image']?>">
        </div>
      <a class="btn-floating halfway-fab modal-trigger red" href="#<?php echo $row['id']?>"><i class="material-icons">info_outline</i></a> 
      
  </div>
    </div>

 <!-- Modal Structure -->
      <div id="<?php echo $row['id']?>" class="modal">
        <div class="modal-content">
          <h4><?php echo $row['eventname'];?></h4>
            <p><?php echo $row['description'];?></p>
        </div>
      </div>
    <?php
        }
      }
      ?>
  </div>

<?php include("includes/footer.php")?>




</body>

</html>