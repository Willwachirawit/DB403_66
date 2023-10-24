<?php 
  include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <table>
    <div>
    <tr>
      <th>Product name</th>
      <th>Units in stock</th>
    </tr>
    <!-- add table rows hear ex. 
    -->    
            <?php
                $sql = "SELECT ProductName, UnitsInStock
                FROM products
                WHERE CategoryID = {$_GET['category']}";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['ProductName']}</td>
                            <td>{$row['UnitsInStock']}</td>
                          </tr>";  
                }
            ?>
            </div>
               
  </table>
  <?php
?>
</body>
</html>