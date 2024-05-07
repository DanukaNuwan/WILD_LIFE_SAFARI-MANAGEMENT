<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PAYMENT | WILD-LIFE SAFARI</title>
  <link rel="stylesheet" type="text/css" href="./CSS/payment.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap">
</head>

<body>
  <?php require 'header.php'; ?>

  <div class="topic">
    PAYMENT  
  </div>
<!-- create form for payment -->
  <div class="cont"> 
    <form method="post" action="paymentsql.php">
      <h3>Unite with Us</h3>
      <label for="fname">Accepted Cards</label>
      <div class="icon-container">
            <img src="./IMG/Visa.jpg">
            <img src="./IMG/MC.jpg">
            <img src="./IMG/CI.jpg">
            <img src="./IMG/AE..jpg">
</div>

      <label for="cname">Name on Card</label>
      <input type="text" name="cardname" placeholder="John More Doe" required>
      
      <label for="ccnum">Credit card number</label>
      <input type="text" id="ccnum" name="cardnumber"  placeholder="1111-2222-3333-4444" required maxlength="16">
      
  <div class="month-year">
  <div class="input-con">
      <label for="expmonth">Exp Month</label>
      <div class="month">
        <select name="expmonth">
          <option value="01">January</option>
          <option value="02">February</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </div>
  </div> 
  
  <div class="input-con">
      <label for="expyear">Exp Year</label>
      <div class="year">
        <select name="expyear">
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
          <option>2027</option>
          <option>2028</option>
        </select>
      </div>
  </div>
 </div>
      <label for="cvv">CVV</label>
      <input type="text" id="cvv" name="cvv" placeholder="352" required maxlength="3">
      
      <button type="submit">PAY</button>
    </form>
  </div>
  <br>
  <?php require 'footer.php'; ?>

</body>
</html>