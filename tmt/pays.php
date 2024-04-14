<?php
 include("db/dbconn.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment Form</title>
  <!--<script type="text/javascript">
    function preventBack() {
        window.history.forward(); 
    }
      
    setTimeout("preventBack()", 0);
      
    window.onunload = function () { null };
    </script>-->
</head>
<body>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f0f0f0;
}

.card {
  width: 400px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.card__title {
  font-size: 24px;
  margin-bottom: 20px;
}

.card__row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.card__col {
  flex: 1;
}

.card__label {
  font-size: 16px;
  margin-bottom: 5px;
}

.card__input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.pay,
.btn {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 20px;
}

.pay {
  background-color: #007bff;
  color: #fff;
}

.btn {
  background-color: #dc3545;
  color: #fff;
}

.payment {
  font-size: 20px;
  margin-bottom: 400px;
}

    </style>








<!--<?php

require_once('db/dbconn.php');
session_start();
$customerid  =   $_SESSION['customerid'] ;

$sql="select *from transaction where CUSTOMERID='$customerid' order by transaction_id DESC ";

$tid=$customerid['transaction_id'];
$_SESSION['tid']=$tid;

if(isset($_POST['pay'])){
  $cardno=mysqli_real_escape_string($con,$_POST['cardno']);
  $exp=mysqli_real_escape_string($con,$_POST['exp']);
  $cvv=mysqli_real_escape_string($con,$_POST['cvv']);
  $amount=$customerid['price'];
  if(empty($cardno) || empty($exp) ||  empty($cvv) ){
    echo '<script>alert("please fill the place")</script>';
  }
  else{
    $sql2="insert into pa (transaction_id,card_no,exp_date,cvv,price) values($tid,'$cardno','$exp',$cvv,$amount)";
    $result = mysqli_query($con,$sql2);
    if($result){
      header("Location: psucess.php");
    }
    else{
        header("Location: pfailed.php");
    }
  }

}


?>-->


  <h2 class="payment">TOTAL PAYMENT : <!--<a>₹<?php  echo $amount?>/-</a></h2>-->

  <br/>
  <br/>
  <br/>
  <div class="card">
    <form method="POST">
      <h1 class="card__title">Enter Payment Information</h1>
      <div class="card__row">
        <div class="card__col">
          <label for="cardNumber" class="card__label">Card Number</label
          ><input
            type="text"
            id="cardNumber"
            placeholder="xxxx-xxxx-xxxx-xxxx"
            required="required"
            name="cardno"
            maxlength="16"
          />
        </div>
        
      </div>
      <div class="card__row">
        <div class="card__col">
          <label for="cardExpiry" class="card__label">Expiry Date</label
          ><input
            type="text"
            id="cardExpiry"
            placeholder="xx/xx"
            required="required"
            name="exp"
            maxlength="5"
          />
        </div>
        <div class="card__col">
          <label for="cardCcv" class="card__label">CCV</label
          ><input
            type="password"
            id="cardCcv"
            placeholder="xxx"
            required="required"
            name="cvv"
            maxlength="3"
          />
        </div>
        <div class="card__col card__brand"><i id="cardBrand"></i></div>
      </div>
      <button class="btn" name="pay"><a href="psucess.php">PAY NOW</button>
      <button class="btn" name="cancel"><a href="pfailled.php">CANCEL</a></button>
      
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
  <script src="main.js"></script>
</body>
</html>
