<html>
    <head>
        <link rel="stylesheet" href="style/register.css">
    </head>
    <body>
    
 

        <?php
            include "user_connect.php";
            $today = date("Ynj");  

            $ss = "01";
            //echo $today . $ss;
           
            $sql = " SELECT * FROM `company` ";
            $total = select($sql);
            $num = $total -> fetch_array() ;
            echo $num["company_id"];
            // $num = $stmt->get_result()->fetch_assoc();
            // $row_num = $num["num"];
            // $pro_num = $row_num +1;
            // echo $pro_num;
            $sql = " SELECT `user_id`, `user_name`, `user_password`, `user_email`, `user_level` FROM `user` ";
            $total = select($sql);
            

            while($real_array = f_array($total)){
                echo $real_array["user_id"] . " ";
            }
        ?>

    </body>

</html>