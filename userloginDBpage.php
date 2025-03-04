<html>
    <head>
        <title>
        login DataBase page
        </title>
    </head>
    <body>
        <?php
        $a=$_GET['t1'];
        $b=$_GET['t2'];
       
        $con=mysqli_connect('localhost','root','seedit','bookshop');
       echo $q="select*from account2 where name='$a'and password='$b'";
       $result=mysqli_query($con,$q);
       if($row=mysqli_fetch_array($result))
       {
        session_start();
        $_SESSION['p']=$a;
        echo"
        <script>window.location='show.php'</script> ";
        
        }

        else{

        echo" <script>alert('please input username ,password')</script> ";
        
    }
        ?>
    </body>

</html>