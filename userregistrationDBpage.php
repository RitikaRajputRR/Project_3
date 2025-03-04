<html>
    <head>
        <title>
        registration DataBase page
        </title>
    </head>
    <body>
        <?php
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $c=$_GET['t3'];
        $d=$_GET['t4'];
        $con=mysqli_connect('localhost','root','seedit','bookshop');
       echo $q="insert into account2 values('$a','$b','$c','$d')";
       $result=mysqli_query($con,$q);
       if($result)
       
       {
         echo" save
         <script>window.location='userloginpage.php'</script>";
        }
        else{
        echo"error";
        
    }
        ?>
    </body>

</html>