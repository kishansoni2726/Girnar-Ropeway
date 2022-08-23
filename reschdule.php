<html lang="en">
<head>

<!--menu-->
<?php include("includes/header.php");?>
<?php include("includes/connect.php");?>
<!--background image and card-->
</head>
<body>
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
<div class="container">
              <div class="row">
                <form action="Reschdule1.php" method="post">
                <div class="input-field col l3 m6 s12">
                    <select name="dest">
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
                <div class="input-field col l3 m12 s12">
                  
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
    <div class="input-field col l3 m12 s12">
            <input type="text" name="email" id="dat">
                          <label for="dat">Enter E-mail</label>
                  </div>
  <!--Time Section--> 
                  <div class="input-field col l3 m12 s12">
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
                  <div class="input-field col l3 m12 s12">
                    <select name="mem">
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
                  <div class="input-field col s2 push-s5">
                    <input type="submit" value="Reschdule Now.." class="btn red">
                </div>
                </form>
                </div>
              </div>
<br>
     <?php include("includes/footer.php")?>
</body>
</html>