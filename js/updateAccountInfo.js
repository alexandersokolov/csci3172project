function updatePassword(){

}


function updateInfo(){
  var pass = document.getElementById('newPass').value;
  var confirmPass = document.getElementById('confirmPass').value;
  var email = document.getElementById('email').value;

  if(pass != ""){
    if(pass == confirmPass){
      if(email != ""){
        document.getElementById('info_error').innerHTML += "";
        document.getElementById('info_error').style.display = "none";

        var obj = new Object();
        obj.id = "updateInfo";
        obj.pass = pass;
        obj.email = email;

        pushData(obj);
      }
      else{
        document.getElementById('info_error').innerHTML += "<br><p>Please enter an email address</p>";

      }
    }
    else{
      document.getElementById('info_error').innerHTML += "<p>Passwords do not match</p>";
      document.getElementById('info_error').style.display = "block";
    }
  }
  else{
    if(email != ""){
      document.getElementById('info_error').innerHTML += "";
      document.getElementById('info_error').style.display = "none";

      var obj = new Object();
      obj.id = "updateInfo";
      obj.email = email;

      pushData(obj);
    }
    else{
      document.getElementById('info_error').innerHTML += "<br><p>Please enter an email address</p>";

    }
  }
}

function updateAddress(){

  var firstName = document.getElementById('firstName').value;
  var lastName = document.getElementById('lastName').value;
  var addressOne = document.getElementById('addressOne').value;
  var addressTwo = document.getElementById('addressTwo').value;
  var postCode = document.getElementById('postCode').value;

  if(firstName != "" && lastName != "" && addressOne != "" && postCode != ""){

    var postCodeRegExp = /^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ]( )?\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i;

    if(!postCodeRegExp.test(postCode)){
      document.getElementById('address_error').innerHTML += "<p>Please enter a valid post code eg: A1A 1A1</p>";
      document.getElementById('address_error').style.display = "block";
    }
    else{
      document.getElementById('address_error').innerHTML += "";
      document.getElementById('address_error').style.display = "none";

      var obj = new Object();
      obj.id = "updateAddress";
      obj.firstName = firstName;
      obj.lastName = lastName;
      obj.addressOne = addressOne;
      obj.addressTwo = addressTwo;
      obj.postCode = postCode;

      pushData(obj);
    }

  }
  else{
    document.getElementById('address_error').innerHTML += "<p>Please enter all required information</p>";
    document.getElementById('address_error').style.display = "block";
  }
}

function updatePaymentInfo(){

  document.getElementById('payment_error').innerHTML = "";


  var cardType = document.getElementById('cardType').value;
  var cardNum = document.getElementById('cardNum').value;
  var cardCvc = document.getElementById('cardCvc').value;
  var expMonth = document.getElementById('expMonth').value;
  var expYear = document.getElementById('expYear').value;

  if(cardType != "" && cardNum != "" && cardCvc != "" && expMonth != "" && expYear != ""){
    if(cardNum.length != 16){
      document.getElementById('payment_error').innerHTML += "<p>Please enter valid card number</p>";
      document.getElementById('payment_error').style.display = "block";
    }


  }
  else{
    document.getElementById('payment_error').innerHTML += "<p>Please enter all required information</p>";
    document.getElementById('payment_error').style.display = "block";
  }

}

function pushData(obj){

  alert("got it!");
}
