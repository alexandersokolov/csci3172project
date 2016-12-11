<form class="ui form" method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>">
  <h1 class="ui dividing header">Account Home</h1>

  <br>

  <h4 class="ui dividing header">User Information</h4>
  <div class="field">
    <div class="ui negative message" id="info_error" style="display: none;"></div>
    <div class="two fields">
      <div class="field">
        <label>Update Password</label>
        <input type="password" id="newPass" placeholder="Password">
      </div>
      <div class="field">
        <label>Confirm Password</label>
        <input type="password" id="confirmPass" placeholder="Confirm Password">
      </div>
    </div>
    <div class="one field">
        <label>Update Email</label>
        <input type="text" id="email" placeholder="email" value="<?php echo $email; ?>">
    </div>
    <input class="ui button submit" type="button" name="update" value="Update Information" onclick="updateInfo();">
  </div>

  <br>

  <h4 class="ui dividing header">Address</h4>
  <div class="ui negative message" id="address_error" style="display: none;"></div>

  <div class="field">
    <label>Name</label>
    <div class="fields">
      <div class="eight wide field">
        <input type="text" id="firstName" placeholder="First Name" value="<?php echo $firstName; ?>">
      </div>
      <div class="eight wide field">
        <input type="text" id="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>">
      </div>
    </div>
  </div>

  <div class="field">
    <label>Billing Address</label>
    <div class="field">
      <input type="text" id="addressOne" placeholder="Street Address" value="<?php echo $addressOne; ?>">
    </div>
    <div class="fields">
      <div class="twelve wide field">
        <label>Address Two</label>
        <input type="text" id="addressTwo" placeholder="Apt #" value="<?php echo $addressTwo; ?>">
      </div>
      <div class="four wide field">
        <label>Postal Code</label>
        <input type="text" id="postCode" placeholder="post code" value="<?php echo $postCode; ?>">
      </div>
    </div>
    <input class="ui button submit" type="button" name="update" value="Update Address" onclick="updateAddress();">

  </div>


  <br>


  <h4 class="ui dividing header">Billing Information (Optional)</h4>
  <div class="field">
    <div class="ui negative message" id="payment_error" style="display: none;"></div>
    <div class="field">
      <label>Card Type</label>
      <select class="ui fluid dropdown" id="cardType">
        <option value="">Credit card</option>
        <option value="mastercard">MasterCard</option>
        <option value="visa">Visa</option>
      </select>
    </div>
    <div class="fields">
      <div class="seven wide field">
        <label>Card Number</label>
        <input type="text" id="cardNum" maxlength="16" placeholder="Card #">
      </div>
      <div class="three wide field">
        <label>CVC</label>
        <input type="text" id="cardCvc" maxlength="3" placeholder="CVC">
      </div>
      <div class="six wide field">
        <label>Expiration</label>
        <div class="two fields">
          <div class="field">
            <select class="ui fluid search dropdown" id="expMonth">
              <option value="">Month</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>
          <div class="field">
            <input type="text" id="expYear" maxlength="4" placeholder="Year">
          </div>
        </div>
      </div>
    </div>
    <input class="ui button submit" type="button" name="update" value="Update Payment Info" onclick="updatePaymentInfo();">

  </div>

  <br>


</form>
