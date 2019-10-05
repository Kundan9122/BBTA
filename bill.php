<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BILL</title>
    <link rel="stylesheet" href="style.css" media="all" />
    
  </head>
  <body>
  

<script>
function myFunction() {
  window.print();
}
// function myFunction1(){
//   include "C:/xampp/htdocs/travel/payment/index.html";
// }
</script>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.jpg">
      </div>
      <h1>Bharat Bhrman Travel Agency</h1>
      <div id="company" class="clearfix">
        <div>Bharat Bhrman Travel Agency</div>
        <div>Christ University,<br />Hosur road</div>
        <div>Bangalore-560029</div>
        <div><a href="mailto:company@example.com">bbta.@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>NAME:</span><?php echo $name;?></div>
        <div><span>EMAIL:</span><?php echo $email;?></div>
        <div><span>ADDRESS:</span>Christ University</div>
        <div><span>TYPE:</span><?php echo $type;?></div>
        <div><span>FROM</span><?php echo $from;?></div>
        <div><span>TO</span> <?php echo $to;?></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">PLACE</th>
            <th class="desc">PACKAGE DESCRIPTION</th>
            <th>PRICE(1per)</th>
            <th>KMs</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Bangalore</td>
            <td class="desc">It is the most important and busiest part not for only Karnataka but also in total southern India.
               It serves as the capital city of Karnataka as well as industrial capital also.</td>
            <td class="unit">Rs.4,000</td>
            <td class="qty">200</td>
            <td class="total">Rs.8,000</td>
          </tr>
          <tr>
            <td class="service">Chennai</td>
            <td class="desc">Chennai, the capital city of Tamil Nadu, attracts many visitors either as tourists or as part of 
              its large workforce. The vast majority claim the city is one of the best cities to live in. </td>
            <td class="unit">Rs.6,000</td>
            <td class="qty">300</td>
            <td class="total">Rs.12,000</td>
          </tr>
          <tr>
            <td class="service">Mumbai</td>
            <td class="desc">Mumbai city has many distinctive neighborhoods. The southern tip of Mumbai Island, Colaba, is known for the Gateway of India.
               </td>
            <td class="unit">Rs.7,000</td>
            <td class="qty">400</td>
            <td class="total">Rs.14,000</td>
          </tr>
          <tr>
            <td class="service">Delhi</td>
            <td class="desc">Delhi is of great historical significance as an important commercial, transport, and cultural hub, as well as the political centre of India. According to legend, the city was named for Raja Dhilu.</td>
            <td class="unit">Rs.8,000</td>
            <td class="qty">500</td>
            <td class="total">Rs.16,000</td>
          </tr>
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">Rs.50,000</td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">Rs.12,500</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">Rs.62,500</td>
          </tr>
        </tbody>
      </table>
      

    <center><button onclick="myFunction()">CLICK HERE TO PRINT!</button>
    <!-- <a href="payment/index.html" class"btn btn-primary"> Payment</a></center> -->
    <!-- <a href="C:/xampp/htdocs/travel/payment/index.html">
<input type="button" value="Book" name="sbmt" /></a>
    <input type="submit" value="payment" onClick="C:/xampp/htdocs/travel/payment/index.html"> -->
     <button onclick="window.location.href='payment/index.html'">Payment</button> </center>
    <!-- <button onclick="C:/xampp/htdocs/travel/payment/index.html">Make payment</button></center> -->
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      BHARAT BHRMAN AGENCY
    </footer>
  </body>
</html>




