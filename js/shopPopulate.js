function addAllProducts(id){
  console.log("PAGE ID: " + id);
  var type = new Object();
  type.type = id;

  var jsonString = JSON.stringify(type);


  //Sending http request to the php file for validation
  var request = new XMLHttpRequest();

  request.onreadystatechange = processRequest;
  function processRequest(e)
  {
      if (request.readyState == 4 && request.status == 200)
      {

          var response = JSON.parse(request.responseText);

          if(response.length > 0){
            var html = "";
            for(var i = 0; i < response.length; i++){

              html = html + convertProductToHtml(response[i].id, response[i].name, response[i].imagePath, response[i].description, response[i].price, response[i].quantity, response[i].available, response[i].type);
            }

            document.getElementById('shop_content').innerHTML = html;

          }

      }
  }

  request.open("POST", "include/populateShop.php", true);
  request.setRequestHeader("Content-type", "application/json");

  request.send(jsonString);
}

function convertProductToHtml(id, name, imagePath, desc, price, quantity, available, type){

  console.log(name + ", " + imagePath + ", " + desc + ", " + price + ", " + quantity + ", " + available + ", " + type);

  var html = '<img class="ui top aligned small image" src="' + imagePath + '">' +
  '<a><h3>' + name + '</h3> <p>' + desc + '</p>' +
  '<button class="ui button" onclick="addToCart('+ id + ');">Add to cart</button> </a>' +
  '<div class="ui tag labels">' +
  '<a class="ui label"> $' + price + '</a> </div> <br> <div class="ui divider"></div>';

  return html;
}
