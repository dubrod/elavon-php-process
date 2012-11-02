<? 
require_once('inc/processing.php');

//processing function
$Transaction_Process = new Transaction_Process;
$Transaction_Process->do_simpleTransaction($_POST['ssl_first_name'],$_POST['ssl_last_name'], $_POST['ssl_avs_address'], $_POST['ssl_address2'], $_POST['ssl_avs_zip'],$_POST['ssl_state'],$_POST['ssl_city'], $_POST['ssl_phone'],$_POST['ssl_email'], $_POST['ssl_card_number'], $_POST['ssl_exp_date'],$_POST['ssl_cvv2cvc2'], $_POST['amount'], $_POST['trans_submit']);

?>

<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Elavon PHP API</title>
    
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<style type="text/css">
* { font-family: Verdana; font-size: 96%; }
label { width: 10em; float: left; }
label small{ color: #aaa; font-size: 90%;}
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
p { clear: both; }
.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
</style>
  <script>
  $(document).ready(function(){
    $("#paymentForm").validate();
  });
  </script>
</head>
<body>

<div style="margin: 20px auto; width: 60%; background: #eee; color: #444; font-size: 14px; padding:20px; ">
<p>Dear Client, <br>
Please pay your  Invoice below</p>

<!-- start basic Elavon Form -->
<form method="post" id="paymentForm">

<!-- start details table -->
    <table cellpadding="5" cellspacing="5" border="0" width="40%" style="float: left;">
      <tr>
        <td/><td/>
      </tr>
      <tr>
        <td class="label"><label for="ssl_first_name">First Name:</label></td>
        <td class="field">
          <input id="first_name" class="required" maxlength="40" name="ssl_first_name" size="20" type="text" tabindex="3" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><label for="ssl_last_name">Last Name:</label></td>
        <td class="field">
          <input id="last_name" class="required" maxlength="40" name="ssl_last_name" size="20" type="text" tabindex="4" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><label for="ssl_avs_address">Billing Address:</label></td>
        <td class="field">
          <input maxlength="40" class="required" name="ssl_avs_address" size="20" type="text" tabindex="5" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"></td>
        <td class="field">
          <input  maxlength="40" name="ssl_address2" size="20" type="text" tabindex="6" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><label for="ssl_city">City:</label></td>
        <td class="field">
          <input  maxlength="40" class="required" name="ssl_city" size="20" type="text" tabindex="7" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><label for="ssl_state">State:</label></td>
        <td class="field">
          <select id="state" class="required" name="ssl_state" style="margin-left: 4px;" tabindex="8">
            <option value="">Choose State:</option>
            <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
          </select>
        </td>
      </tr>

      <tr>
        <td class="label"><label for="ssl_avs_zip">Zip:</label></td>
        <td class="field">
          <input  maxlength="10" name="ssl_avs_zip" style="width: 100px" type="text" class="required digits" tabindex="9" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><label for="ssl_phone">Phone:</label></td>
        <td class="field">
          <input maxlength="14" name="ssl_phone" type="text" class="required" tabindex="10" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><label for="ssl_email">Email Address:</label></td>
        <td class="field">
          <input maxlength="50" name="ssl_email" type="text" class="required email" tabindex="10" value="" />
        </td>
      </tr>
  
</table> 

<!-- start details table -->
    <table cellpadding="5" cellspacing="5" border="0" width="40%" style="float:right; background: #fefefe;">
      <tr>
        <td/><td/>
      </tr>
      <tr>
        <td class="label"><label for="ssl_card_number">Credit Card #:</label></td>
        <td class="field">
          <input id="ssl_card_number" class="required creditcard" maxlength="480" name="ssl_card_number" size="40" type="text" tabindex="11" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><label for="ssl_exp_date">Expiration Date: <br><small>4 Digits MMYY</small></label></td>
        <td class="field">
          <input id="ssl_exp_date" class="required digits" maxlength="50" name="ssl_exp_date" size="10" type="text" tabindex="12" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><label for="ssl_cvv2cvc2">CVV: <br><small>3 Digits on Back</small></label></td>
        <td class="field">
          <input id="ssl_cvv2cvc2" class="required digits" maxlength="50" name="ssl_cvv2cvc2" size="10" type="text" tabindex="12" value="" />
        </td>
      </tr>
</table>      
 
<br clear="all">
<hr>
<br>
<label>Purchase Amount: <small>00.00</small></label>
<input type="text" name="amount" class="required number">
<br>
<br clear="all">
<button name="trans_submit">SUBMIT YOUR ORDER</button>
</form>
<br>

</div>
    
</body>
</html>