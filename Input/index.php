<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input</title>
  <link rel="stylesheet" href="inputStyle.css">
</head>
<body>
  <h1 style="text-align: center;">Input</h1>
  <div class="container">

    <form action="index.php" method="post">
    <div class="search">
    <input 
    type="text"
    name="productSearch"
    id="productSearch"
    required
    placeholder="Search"/>

    <button type="submit">Q</button>
    </div>
    
    <div class="input">
    
    <label for="productCode"><b>Code:</b></label>
    <input 
    type="text"
    name="productCode"
    id="productCode"
    required
    placeholder="Enter product code"/>
    
    <label for="productQuantity"><b>Quantity:</b></label>
    <input 
    type="text"
    name="productQuantity"
    id="productQuantity"
    required
    placeholder="Enter quantity"/>
    
    <button type="submit">Add</button>
    <div class="display">

    </div>

    </div>

    <div class="total">

        <?php include 'totalCal.php'?>

    </div>
    </form>
  </div>
</body>
</html>
