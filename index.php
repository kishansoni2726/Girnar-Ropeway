<?php include("includes/header.php")?>
<?php include("includes/connect.php")?>
<!DOCTYPE html>
<html>
<body>
	<section>
			<div class="container">
				<div id="home-content" class="right-align">
					<div id="home-content-inner">
						<div id="home-heading" class="">
							<h3 id="home-heading-1">Explore</h3>
							<h1 id="home-heading-2">Asia's Biggest <span>Ropeway Tour</span></h1>
						</div>
					</div>
				</div>
			</div>
	</section>
<!--Ticket Section-->

<h3 class="center red-text">Book Your Tickets</h3>
			<img src="images/circle-01.png" style="height: 200px;" class="left hide-on-med-and-down">
				<img src="images/circle-02.png" class="right hide-on-med-and-down">
					<p class="center red-text">Don't miss the guaranteed lowest price</p>
	 					<div class="container">
	 						<div class="row">
                <form action="booking.php" method="post">
	 							<div class="input-field col l3 m6 s12">
    								<select name="destination">
      										<option value="" disabled selected>Desination</option>
      										<?php
                        $select=$con->prepare("SELECT placename FROM destination");
                        $select->setFetchMode(PDO::FETCH_ASSOC);
                        $select->execute();
                        while($data=$select->fetch()){
                        ?>
                        <option value="<?php echo $data['placename']; ?>"><?php echo $data['placename'];?></option>
                        <?php
                        }
                        ?>
    								</select>
    							</div>
    <!--Date Section-->
								<div class="input-field col l3 m6 s12">
									
                       <input type="text" name="jdate" id="dat" class="datepicker" >
                       <label for="dat">Select Date</label>
                </div>
                
                <script>
 $(document).ready(function(){
    $('.datepicker').datepicker({
      minDate : new Date(),
    });
  });
  </script>
	<!--Time Section-->	
   								<div class="input-field col l3 m6 s12">
    								<select name="timeslt" required="">
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
                  <div class="input-field col l3 m6 s12">
    								<select name="member">
      										<option value="" disabled selected>Member</option>
      										<?php
                        $select=$con->prepare("SELECT id FROM members");
                        $select->setFetchMode(PDO::FETCH_ASSOC);
                        $select->execute();
                        while($data=$select->fetch()){
                        ?>
                        <option value="<?php echo $data['id']; ?>"><?php echo $data['id'];?></option>
                        <?php
                        }
                        ?>
    								</select>
    							</div>
	<!--Button Section-->
  	 							<div class="input-field col s9 push-s5">
                    <input type="submit" value="Book" class="btn red">
								</div>
        	      </form>
  							</div>
  						</div>
<br>


<div>
    <div class="row">
      <!--Map Section-->
      <div class="container col l7 m6 s12">
                    <p class="about-section-font"># Celebrating 50 Years Of Safe Operations</p>
                      <span class="about-section-p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Udan Khatola is the first and the largest ropeway brand in India. We have been in the ropeway business for more than five decades since 1969 and are the pioneers in the field of ropeway in India. The journey of Udan Khatola was started with the construction of ropeway at Ma Mansa Devi Temple at Haridwar, Uttarakhand and since then there was no looking back. Udan Khatola is operating eight ropeways across India. 
                      </span>
                      <br>
                      <a href="about.php" class="input-field  col s3 btn red push-s5">Read More...</a>
                  </div>
    <!--Date Section-->
                <div class=" col l5 m6 s12">
                       <img src="images/map.svg"/>
                </div>
                
    </div>
</div>
<!--News & Update-->
<div>
	<h4 class="red-text">&nbsp;&nbsp;&nbsp;# Did You Know Girnar</h4>
		<div class="row">
       <?php 
      $stmt=$con->prepare('SELECT * FROM image_video limit 3');
        $stmt->execute();
        if($stmt->rowCount()>0)
        {
          while($row=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            extract($row);
        
    ?>
    		<div class="col l4 m12 s12">
    			<div class="card hoverable">
        			<div class="card-image">
        				<a href="<?php echo $row['vlink'];?>" class="mediabox"><img src="admin-panel/uploads/slider/<?php echo $row['image']?>"></a>
        			</div>
  				</div>
       		</div>
        <?php
        }
      }
      ?>
        </div>
</div>

        <!--Parallax-->
         <div id="p1" class="parallax-container">
            <div  class="parallax">
                <img src="https://user-images.githubusercontent.com/26179770/37276909-311e65d2-2609-11e8-9fb9-fa2a6838b02f.png">
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 center white-text" >
                        <h1 style="margin-top:105px;"><b>QUOTE</b></h1>
                        <h4 >“The forest is not a resource for us, it is life itself. It is the only place for us to live.”
                          <br><br>
                          "Don’t be trapped by dogma –
                            which is living with the results of other people’s thinking. <br />
                            Don’t let the noise of other’s opinions drown out your own inner voice."
                        </h4>
                    </div>
                </div>
            </div>
                
        </div>


<br>
<a href="gallery.php" class="btn red right" style="margin-right: 25px;">View All Images</a>
<h4 class="red-text">&nbsp;&nbsp;&nbsp;# Gallery</h4>
<div class="row">
   <?php 
      $stmt=$con->prepare('SELECT image,description FROM image_video limit 4');
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
   
   
   

  <!--Parallax-->
         <div id="p1" class="parallax-container">
            <div  class="parallax">
                <img src="https://user-images.githubusercontent.com/26179770/37276909-311e65d2-2609-11e8-9fb9-fa2a6838b02f.png">
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 center white-text" >
                        <h1 style="margin-top:105px;"><b>GIR NATIONAL PARK</b></h1>
                        <h5>Being one of the youth brands of Global Tourism India (GTI TRAVELS PRIVATE LIMITED), we know your needs the best and thus offer you the best of your time and money for Gir National Park Tour. <br><br>Under the guidance of our expert guides you will have surely a life time experience or everyone looking to fulfill their wildlife fantasies across one of most renowned wildlife sanctuary of India, we offer Gir Wild Life Tour Package.
                        </h5>
                    </div>
                </div>
            </div>
                
        </div>
<br>
<a href="news-event.php" class="btn red right" style="margin-right: 25px;">View All News & Events</a>
<!--News & Update-->
  <h4 class="red-text">&nbsp;&nbsp;&nbsp;# News & Events </h4>
  <div class="row">
            
         <?php 
      $stmt=$con->prepare('SELECT * FROM news limit 4');
        $stmt->execute();
        if($stmt->rowCount()>0)
        {
          while($row=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            extract($row);
        
    ?>
    <div class="col l3 s12 m6">
      <div>
      <div class="card hoverable">
       <div class="card-image">
          <img src="admin-panel/uploads/news_event/<?php echo $row['image']?>">
        </div>
      <a class="btn-floating halfway-fab modal-trigger red" href="#<?php echo $row[
      'id'];?>"><i class="material-icons">info_outline</i></a> 
      
    </div>
  </div>
    </div>

 <!-- Modal Structure -->
      <div id="<?php echo $row['id'];?>" class="modal">
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
</div>


<?php include("includes/footer.php");?>

</body>

</html>