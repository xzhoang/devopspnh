<html>
    <head>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>

    <title>PNH Shop</title>
    </head>
    <body>
      <h1> Welcome to my shop. Please order </h1>
       <table>
        <tr>
            <th> Menu </th><th>Price</th>
        </tr>   
        <tr>
            <?php
                $json = file_get_contents('http://product-service'); 
                $obj = json_decode($json);

                $products = $obj->products;
                foreach ($products as $product) {
                    echo "<tr><td>$product</td> <td>30$</td> </tr>";
                }
            ?>
        </tr>

       </table> 

    </body>

</html>
    
