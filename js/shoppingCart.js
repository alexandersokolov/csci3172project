

function updateCart(){
  alert("updated");

}

function addToCart(id){

  var obj = new Object();
  obj.id = "all";

  var jsonObj = JSON.stringify(obj);


  //Sending http request to the php file for validation
  var request = new XMLHttpRequest();

  request.onreadystatechange = processRequest;
  function processRequest(e)
  {
      if (request.readyState == 4 && request.status == 200)
      {

          var response = JSON.parse(request.responseText);



      }
  }

  request.open("POST", "include/addToCart.php", true);
  request.setRequestHeader("Content-type", "application/json");

  request.send(jsonObj);
}
