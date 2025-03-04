<html>
    <head>
        <title>
            payrequest
        </title>
        <style>
            .b{
                background-color:beige;

            }
        </style>
    </head>
    <body class="b">

        <?php
         
        $con=mysqli_connect('localhost','root','seedit','bookshop');
        $q="select*from pay";
       $result=mysqli_query($con,$q);
       echo"<br>";
       echo"<br>";
       echo"<br>";
       echo"<table border=1><tr><td>Order</td><td>Pay</td></tr>";
       
       if($row=mysqli_fetch_array($result))
       {
        
        echo"
        <div>
         <table border=1>
         <tr><td>
         Order: $row[ordre] </td>
       <td>  Pay:   $row[pay]</td></tr>
         
         </table>
         </div>";}

        else{

        echo" <script>alert('please input username ,password')</script> ";
        
    }
    ?>
    </body>
</html>