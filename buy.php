<html>
    <head>
        <title>
            book1
        </title>
        <style>
            .add{
                margin-top: 20px;
                width: 100px;
                height: 50px;
                color: black;
                background-color: burlywood;
                font-size: 20px;
                font-weight: bold;
                border-radius: 5px;
            }
            .item{
                width: 40%;
                float: left;
                height: 800px;
                background-color: beige;
            }
            .item2{
                width: 60%;
                float: left;
                height: 800px;
                background-color: beige;
                font-size: 20px;
            }
            table{
                margin-top: 200px;

               font-size: 30px;
            }
        </style>
    </head>
    <body>
    
      <?php
      $b=$_GET['id'];
    $con = mysqli_connect("localhost", "root", "seedit", "bookshop");
    $q = "select * from addbook where bookname='$b'";
    $result = mysqli_query($con, $q);
    
    
    while ($row = mysqli_fetch_array($result)) {
        echo " 
                <div class='item'>
                <img src='$row[photo]' width='560px' height='660px'>
                <br>
                </div>
                <div class='item2'>
                <table>
                <tr><td> BookName: $row[bookname]</td></tr>
                <tr><td>Publiser: $row[publiser]</td></tr>
                <tr><td>Edition : $row[edition]</td></tr>
                <tr><td>Authore : $row[authore]</td></tr>
                <tr><td>Price   : $row[price]</td></tr>
                <tr><td><a href='addcard.php?id=$row[bookname]'><input type='button' value='Addcard' class='add'></td></tr>
                </table>
                </div>
               
                    
                </div>
                 ";
                 
            
    }


    ?>
</div>

    </body>
</html>
