<html>
    <head>
        <title>
            addcard
        </title>
    </head>
    <body>
        <?php

         session_start();
         $u=$_SESSION["p"];
         $b=$_GET["id"];
         $con = mysqli_connect('localhost', 'root', 'seedit', 'bookshop');
        echo $q = "insert into cart values('$u','$b')";
         $result = mysqli_query($con, $q);
         if($result)
         {
         
            echo" successfully save
            <script>window.location='onlinepay.php'</script> ";
            
            
        }

        else{
       
            echo"error";
        }

        
        ?>
  </body>
</html>