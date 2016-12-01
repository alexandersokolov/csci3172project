<form class="ui form" method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>">
  <h1 class="ui dividing header">Account Home</h1>

  <br>

  <h4 class="ui dividing header">User Information</h4>
  <div class="field">
    <div class="two fields">
      <div class="field">
        <label>Update Password</label>
        <input type="password" name="password" placeholder="Password">
      </div>
      <div class="field">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" placeholder="Confirm Password">
      </div>
    </div>
    <div class="one field">
        <label>Update Email</label>
        <input type="text" name="email" placeholder="email" value="<?php echo $email; ?>">

    </div>
  </div>

  <br>

  <h4 class="ui dividing header">Address</h4>
  <div class="field">
    <label>Name</label>
    <div class="fields">
      <div class="eight wide field">
        <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName;s ?>">
      </div>
      <div class="eight wide field">
        <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Billing Address</label>
    <div class="fields">
      <div class="twelve wide field">
        <input type="text" name="addressOne" placeholder="Street Address" value="<?php echo $addressOne; ?>">
      </div>
      <div class="four wide field">
        <input type="text" name="addressTwo" placeholder="Apt #" value="<?php echo $addressTwo; ?>">
      </div>
    </div>
  </div>
  <div class="two fields">
    <div class="field">
      <label>Province</label>
      <select class="ui fluid dropdown" name="province">
        <option value="">Province</option>
        <option value="NS">Nova Scotia</option>
      </select>
    </div>
    <div class="field">
      <label>Post Code</label>
      <input type="text" name="postCode" placeholder="post code" value="<?php echo $postCode; ?>">
    </div>
  </div>

  <br>


  <h4 class="ui dividing header">Billing Information (Optional)</h4>
  <div class="field">
    <label>Card Type</label>
    <select class="ui fluid dropdown" name="cardType">
      <option value="">Credid card</option>
      <option value="mastercard">MasterCard</option>
      <option value="visa">Visa</option>
    </select>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Card Number</label>
      <input type="text" name="cardNumber" maxlength="16" placeholder="Card #">
    </div>
    <div class="three wide field">
      <label>CVC</label>
      <input type="text" name="cardCvc" maxlength="3" placeholder="CVC">
    </div>
    <div class="six wide field">
      <label>Expiration</label>
      <div class="two fields">
        <div class="field">
          <select class="ui fluid search dropdown" name="expMonth">
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
          <input type="text" name="expYear" maxlength="4" placeholder="Year">
        </div>
      </div>
    </div>
  </div>

  <br>

  <input class="ui button submit" type="submit" name="update" value="Update Information">
  <div class="ui error message"></div>

</form>
