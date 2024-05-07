<!doctype html>
<html>
<head>
    <title> DONATION | WILD-LIFE SAFARI</title>
    <link rel="stylesheet" href="./CSS/Donation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Libre+Baskerville:wght@700&display=swap">

</head>

 <body>

 <?php require 'header.php'?>

    <div class="main">
      <h1> DONATE </h1>
    </div>
    
    <div class ="img-main">
    <img src="./IMG/don1.jpg" style="width: 1500px; height: 450px;">
    </div>

    <div class ="para" >   
  
     <br/>Support us with your donation !<br> Without you, Our work would be impossible. Your contribution helps to ensure a better life for animals all around the globe. Every donation counts and together, we can change animals lives. 
      Thank you!</p><br><br><br>



    </div>
  
    <div class="Div1">
  <form action="./donorinfo.php" method="post">
   
    <p>Donate-Information</p>
         <label for="fname" >First name:</label><br>
         <input type="text" placeholder="First name" id="fname" name="firstName" value="" required><br>

         <label for="lname">Last name:</label><br>
         <input type="text" placeholder="Last name" id="lname" name="lastName" value="" required><br>

         <label for="Mnum">Mobile Number:</label><br>
         <input type="tel" placeholder="Mobile number" id="Mnum" name="mobileNumber" value="" required><br>

         <label for="email">E-mail:</label><br>
         <input type="email" placeholder="E-mail" id="email" name="email" multiple value = "" required><br>

         <label for="amount">Amount:</label><br>
         <input type="amount" placeholder="Amount/=" id="amount" name="amount" multiple value = "" required><br>

         <button type="submit">ENTER USER DETAILS</button>

         </form>
    </div>

    <div class="payment">
    <form action="./donorpayment.php" method="post">
          <p>Payment-Information</p>

          <label for="Card Number" >Card Number:</label><br>
          <input type="text" placeholder="0000 0000 0000 0000" id="Card Number" name="cardNumber" value="" required><br>

          <label for="Card Holder" >Card Holder:</label><br>
          <input type="text" placeholder="John Snow" id="Card Holder" name="cardHolder" value="" required>&nbsp&nbsp <br> 
          
          <label for="Expire" >Expire:</label><br>
          <input type="text" placeholder="MM/YY" id="Expire" name="expire" value="" required>  
          
          <label for="cvv" >cvv:</label><br>
          <input type="text" placeholder="cvv" id="cvv" name="cvv" value="" required>

    

   
            <br><br><input type="checkbox" name="set" value="set">Save this Card<br><br>
            
            <button type="submit" class="pay now">Pay now</button>
            <button type="submit" class="cancel">Cancel</button>&nbsp &nbsp &nbsp &nbsp <br><br>
             
           
           
            <img src="./IMG/Visa.jpg">
            <img src="./IMG/MC.jpg">
            <img src="./IMG/CI.jpg">
            <img src="./IMG/AE..jpg">
                    
              
            </form>
    </div>


    <?php require 'footer.php'?>
 </body>
</html>
