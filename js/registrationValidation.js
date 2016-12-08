//Initializes the registration forms validation using semantic-ui's form validation
$(document).ready(function(){
  $('.ui.form').form({
      on: 'change',
      fields: {
        username: {
          identifier: 'username' ,
          rules: [
            {
              type  : 'empty' ,
              prompt : 'Please Enter a username'
            }
          ]
        } ,
        password: {
          identifier: 'password' ,
          rules: [
            {
              type : 'empty' ,
              prompt : 'Please enter a password'
            },
            {
              type : 'minLength[6]' ,
              prompt : 'Please Enter a valid password of 6 characters or more'
            }
          ]
        } ,
        email: {
          identifier: 'email' ,
          rules: [
            {
              type : 'email' ,
              prompt : 'Please enter a valid email address'
            }
          ]
        } ,
        firstName: {
          identifier: 'firstName' ,
          rules: [
            {
              type : 'empty' ,
              prompt : 'Please enter your first name'
            }
          ]
        },
        lastName: {
          identifier: 'lastName' ,
          rules: [
            {
              type : 'empty' ,
              prompt : 'Please enter your last name'
            }
          ]
        },
        addressOne: {
          identifier: 'addressOne' ,
          rules: [
            {
              type: 'empty' ,
              prompt : 'Please enter your address'
            }
          ]
        },
        province: {
          identifier: 'province' ,
          rules: [
            {
              type: 'empty' ,
              prompt : 'Please select your province'
            }
          ]
        },
        postCode: {
          identifier: 'postCode' ,
          rules: [
            {
              type: 'empty' ,
              prompt : 'Please enter your post code'
            },
            {
              type: 'regExp' ,
              value: /^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ]( )?\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i
            }
          ]
        }
      }


    });
});


//called after successful submission of the form
function validateForm(){

  return true;
}
