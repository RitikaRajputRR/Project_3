<html>
    <head>
        
      <style>
        *{
            margin: 0px;
        }
            .conatiner 
            {
                width: 100%;
                display: flex;
               flex-wrap: wrap;
                gap:20px;
                padding: 20px;
                height: 1000px;
                background-color:beige;
               

            }

            .item
            {
                width:20% ;
                height:500px ;
                border: 3px solid black;
                padding: 10px 45px;
                box-sizing: border-box;
                background-color:white;

            }
            .s{
               text-align: center;
               font-size: 50px;
               color: purple;
               text-shadow: 0 0 25px white;
              
            }
            .s1{
                width: 100%;
                height: 50px;
            }
        </style>
        
  
    </head>
    <body>
    <div class="conatiner">
      <?php
    $con = mysqli_connect("localhost", "root", "seedit", "bookshop");
    $q = "select * from addbook";
    $result = mysqli_query($con, $q);
    
    
    while ($row = mysqli_fetch_array($result)) {
        
        echo " 
                <div class='item'>
                <img src='$row[photo]' width='200px' height='300px'>
                <br>
                <table>
                <tr><td> BookName: $row[bookname]</td></tr>
                <tr><td>Publiser: $row[publiser]</td></tr>
                <tr><td>Edition : $row[edition]</td></tr>
                <tr><td>Authore : $row[authore]</td></tr>
                <tr><td>Price   : $row[price]</td></tr>
                <tr><td> <a href='buy.php?id=$row[bookname]'><input type='button' value='buy'></td></tr>
                </table>
                </div> ";
            
    }


    ?>
</div>

        
    </body>
</html>