<?php
    
    require_once('db.php');

    function addProducts($product)
    {
        $con=getConnection();

        $sql="insert into products values('','{$product['name']}','{$product['bprice']}','{$product['sprice']}')" ;

                if(mysqli_query($con,$sql))
                {
                    return true;
                }
                else
                {
                    echo false;
                }
    }

?>