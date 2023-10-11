<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JS Test</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link href="style.css" rel="stylesheet">

</head>
<body>


<?php   
  $jsonurl='data.json'; 
  $json = file_get_contents($jsonurl,0,null,null);  
  $json_output = json_decode($json, true);        
  
?>
<div class="container">


<table>

<thead>
    <tr>
       <th>Product</th> 
       <th>Stock</th> 
       <th>Price</th> 
    </tr>
</thead>
    <tbody>
          <?php
          foreach($json_output as $product) {
              echo "<tr class='product-row'>";
              echo "<td>" . $product['product'] ."</td>";
              echo "<td class ='stock'>". $product['stock'] ."</td>";
              echo"<td>" . $product['price'] . "</td>";
            echo "</tr>";

          }
        ?>
       
    </tbody>

</table>
 
</div>
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>