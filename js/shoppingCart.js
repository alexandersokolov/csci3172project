function test(){

}

function addToCart(id){

  var obj = new Object();
  obj.op = "add";
  obj.id = id;

  var jsonObj = JSON.stringify(obj);


  //Sending http request to the php file for validation
  var request = new XMLHttpRequest();

    request.onreadystatechange = processRequest;
    function processRequest(e)
    {
        if (request.readyState == 4 && request.status == 200)
        {

          updateCart();
        }
    }


  request.open("POST", "include/updateCart.php", true);
  request.setRequestHeader("Content-type", "application/json");

  request.send(jsonObj);

}


//
function updateCart(){
  var obj = new Object();
  obj.op = "update";

  var jsonObj = JSON.stringify(obj);


  //Sending http request to the php file for validation
  var request = new XMLHttpRequest();

  request.onreadystatechange = processRequest;
  function processRequest(e)
  {
      if (request.readyState == 4 && request.status == 200)
      {
        console.log(request.responseText);
        var response = JSON.parse(request.responseText);

        console.log(response);

        var html = "";

        if(response.length > 0){

          for(var i = 0; i < response.length; i++){
            console.log(response[i]);

             html += convertToCartHtml(response[i].id, response[i].name, response[i].description, response[i].imagePath, response[i].price, response[i].quantity);

          }
          html += '<div class="ui fluid large teal submit button">Checkout</div>';
        }
        else{
          html = '<p>No items in your cart<p> <br> <div class="ui fluid large teal submit button">Checkout</div>';
        }

        document.getElementById('main_cart_content').innerHTML = html;



      }
  }

  request.open("POST", "include/updateCart.php", true);
  request.setRequestHeader("Content-type", "application/json");

  request.send(jsonObj);
}

function convertToCartHtml(id, name, description, imagePath, price, quantity){

  console.log(name + ", " + description + ", " + imagePath + ", " + price + ", " + quantity);

  var html = '<div class="cartContainer">' +
      '<div class="cartItem">' +
       '<div class="productImage">' +
           '<img src="' + imagePath + '" alt="product Image"  style="width: 100px;height: 100px;">' +
        '</div>' +
       '<!--- Product Title --->'+
       '<div class="productTitle">'+
          '<p>' + name +'</p>' +
      '</div>' +
       '<!-- Product Description -->' +
        '<!-- Will remove description entirely from the shopping cart later as it is redundant and also causes a bunch of problems -->' +
       '<div class="productDescription">' +
          '<p>' + description + '</p>' +
        '</div>' +
       '<div class="productPrice">' +
           '<p><b>Price:</b> $CAD' + price + '</p>' +
      '</div>' +
          '<div class="productPrice">' +
              '<p><b>Quantity:</b>' +  quantity + '</p>' +
          '</div>' +
          '<button class="ui button itemButton" onclick="removeItem(' + id + ');">Remove</button>' +
    '</div>' +
  '</div>';

  return html;
}

function removeItem(id){
  var obj = new Object();
  obj.op = "remove";
  obj.id = id;

  var jsonObj = JSON.stringify(obj);

  //Sending http request to the php file for validation
  var request = new XMLHttpRequest();

  request.onreadystatechange = processRequest;
  function processRequest(e)
  {
      if (request.readyState == 4 && request.status == 200)
      {

        updateCart();
      }
  }

  request.open("POST", "include/updateCart.php", true);
  request.setRequestHeader("Content-type", "application/json");

  request.send(jsonObj);
}
