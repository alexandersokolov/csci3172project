<form class="ui form" method="post" action="<?php echo htmlentities($_SEVER["PHP_SELF"]); ?>">
  <h1 class="ui dividing header">User Registration</h1>

  <br>

  <h4 class="ui dividing header">User Information</h4>
  <div class="field">
    <div class="two fields">
      <div class="field">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">
      </div>
      <div class="field">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
      </div>
    </div>
    <div class="one field">
        <label>Email</label>
        <input type="text" name="email" placeholder="email">

    </div>
  </div>

  <br>

  <h4 class="ui dividing header">Address</h4>
  <div class="field">
    <label>Name</label>
    <div class="fields">
      <div class="eight wide field">
        <input type="text" name="firstName" placeholder="First Name">
      </div>
      <div class="eight wide field">
        <input type="text" name="lastName" placeholder="Last Name">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Billing Address</label>
    <div class="fields">
      <div class="twelve wide field">
        <input type="text" name="addressOne" placeholder="Street Address">
      </div>
      <div class="four wide field">
        <input type="text" name="addressTwo" placeholder="Apt #">
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
      <input type="text" name="postCode" placeholder="post code">
    </div>
  </div>

  <br>

  <input class="ui button submit" type="submit" name="Register" value="Register">
  <div class="ui error message"></div>

</form>
