<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>

label {
 
  width: 110px;
  color: #777777;
}
input {
  padding: 5px 10px;
}
label.validation-error{
    color:   red;
    margin-left: 5px;
}

.hide{
    display:none;
}
      
</style>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
<div class="col-sm-1">
    <div class="container">
      <div class="row">
          <div class="col-md-3 col-md-offset-3">
            <br>
              <h2>Stock</h2>
              <br>
              <form action="insert.php"  method="post"  onsubmit="event.preventDefault();onFormSubmit();">
                <div class = "sub">
                    <label for="product">Product:</label>
                    <input list="products" name="product" id="product">
                    <datalist id="products">
                      <option value="City">
                      <option value="Verna">
                      <option value="Swift">
                    </datalist>
                    <label id="productValidationError" class="validation-error hide">product invalid</label>
                    <br><br>
                    <label for="seller">Seller:</label>
                    <input list="sellers" name="seller" id="seller">
                    <datalist id="sellers">
                      <option value="Honda">
                      <option value="Hyundai">
                      <option value="Maruti">
                    </datalist>
                    <label id="sellerValidationError" class="validation-error hide">seller invalid</label>
                    <br><br>
                    <label for="text">Price:</label>
                    <input type="number" name="price" id="price" onchange="gstcal()">
                    <label id="priceValidationError" class="validation-error hide">price invalid</label>
                    <br><br>
                    <label for="text">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" onchange="gstcal()">
                    <label id="quantityValidationError" class="validation-error hide">quantity invalid</label><br><br>
                    <label for="text">GST:</label>
                    <input type="number" name="gst" id="gst" onchange="gstcal()">
                    <label id="gstValidationError" class="validation-error hide">gst invalid</label><br><br>
                    <label for="text">Total:</label>
                    <input type="number" name="total" id="tot_price" >
                    <label id="totalValidationError" class="validation-error hide" >total invalid</label><br><br>
                    <label for="text">Number:</label>
                    <input type="tel" name="number" id="number"><br><br>
                    <label for="text">Email:</label>
                    <input type="email" name="email" id="email">
                    <label id="emailValidationError" class="validation-error hide">email Invalid</label><br><br>
                    <label for="address">Address:</label>
                    <textarea name="address" style="width:300px; height:100px;"></textarea><br><br>
                    <input type="submit" value="Submit" name="save" >    
                </form>
</body>
<script>
    let selectedRow = null
    function onFormSubmit() {
   if(isValid=true) {
    validate()
    selectedRow == null
   }else{
    alert('d')
   }
}

  
    function validate() {
    isValid = true;
    if (document.getElementById("email").value == "") {
        isValid = false;
        document.getElementById("emailValidationError").classList.remove("hide");
       
    } else {
        
        if (!document.getElementById("emailValidationError").classList.contains("hide"))

            document.getElementById("emailValidationError").classList.add("hide");
            
    }
    
    isValid = true;
    if (document.getElementById("product").value == "") {
        isValid = false;
        document.getElementById("productValidationError").classList.remove("hide");
       
    } else {
        isValid = true;
        if (!document.getElementById("productValidationError").classList.contains("hide"))

            document.getElementById("productValidationError").classList.add("hide");
            
    }
    isValid = true;
    if (document.getElementById("seller").value == "") {
        isValid = false;
        document.getElementById("sellerValidationError").classList.remove("hide");
       
    } else {
        isValid = true;
        if (!document.getElementById("sellerValidationError").classList.contains("hide"))

            document.getElementById("sellerValidationError").classList.add("hide");
            
    }
    return isValid;

}
function gstcal(){
    let gst = document.getElementById("gst").value;
    let price = document.getElementById("price").value;
    let qty = document.getElementById("quantity").value;
    const obj = price * qty;
    const tot_price = (obj * gst/100) + obj
    document.getElementById("tot_price").value = tot_price;
}

</script>
</html>