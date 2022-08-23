<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
       
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<?php
try{
$con=new PDO("mysql:host=localhost;dbname=id16901679_gir_ropeway","id16901679_gir_ropeway1","M?+uWAT_wG!$BP5(");

}
catch(PDOException $e){
        echo "ERROR".$e->getMessage();
}



    $select=$con->prepare("SELECT * FROM booking where email = :email");
    $select->bindparam(':email',$em);
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $select->execute();
        while($data=$select->fetch()){
      ?>
         <div class="row">
      </div>    
        <div class="row container">
    <div class="col l12 s12 m6">
      <div class="card ">
        <div class="card-content white-text">
          <span class="card-title red-text">Girnar Ropeway Private Ltd.</span>
            <p>Girnar Taleti, Junagadh</p>
            <p>+91 95106 60995</p>
            <p>girnarropeway@gmail.com</p>
            <p class="right-align">Customer Email Id:- <?php echo $data['email']?></p>
          <center class="black-text"><h4>Ropeway Ticket</h4></center>

      <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Destination</th>
              <th>Time Slot</th>
              <th>Journey Date</th>
              <th>Member</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['destination']?></td>
            <td><?php echo $data['timeslot']?></td>
            <td><?php echo $data['date']?></td>
            <td><?php echo $data['member']?></td>
          </tr>
        </tbody>
      </table>
          </p>
        </div>
        <div class="card-content">
          <p class="right-align"><b>Total: <?php echo $data['price']?></b>
          <p class="right-align"><b>Payment Id: <?php echo $data['razorpay_payment_id']?></b></p>
          <br>
          <p class="center"><b>Thanks for Booking with us!</b></p>
          <p class="center">Girnar Ropeway Team</p>
        </div>
        <div class="card-content">
         <p class="right-align">Need Help? visit our <a href="faq.php"> help center</a></p>
        </div>
        <div class="card-action">
          <button onclick="myFunction()" class="btn red">Print this page</button>
        </div>
      </div>
    </div>
  </div>
       <?php
        }

      //header("location:/one/payment/booking.php");

?>
 

<script>
function myFunction() {
  window.print();
}
</script>
