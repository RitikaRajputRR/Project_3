<html>
    <head>
        <title>
        addbook DataBase page
        </title>
    </head>
    <body>
        <?php
        $a=$_POST['t1'];
        $b=$_POST['t2'];
        $c=$_POST['t3'];
        $d=$_POST['t4'];
        $n=$_FILES['t5']['name'];
        $tn=$_FILES['t5']['tmp_name'];
        $o=$_POST['t6'];
        if(move_uploaded_file($tn,$n))
        {
            $con=mysqli_connect('localhost','root','seedit','bookshop');
            $q="insert into addbook values('$a','$b','$c','$d','$n','$o')";
            $result=mysqli_query($con,$q);
            if($result)
            {
                echo"save
                <script>window.location='bookrequest.php'</script>";
            }
            else{
                echo"error";
            }
        }

        ?>
    </body>
</html>