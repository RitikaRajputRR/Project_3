<html>
    <head>
        <title>
            user jo book karidna chahega wo iske through admin dekhega.
        </title>
        <script>
            .b{
                background-color:beige;
            }
        </script>
    </head>
    <body>
        
    <?php
     
     $con=mysqli_connect('localhost','root','seedit','bookshop');
     echo $q="select*from cart ";
     $result=mysqli_query($con,$q);
     
     while($row=mysqli_fetch_array($result))
     
     {
      
      echo" 
      <div class='b'>
      <table border=1>
     <tr><td>
    Name:     $row[username]</td>
    <td>
    Bookname: $row[bookname] </tr></td></table>
    </div>";
      
      }
     ?>
    </body>
</html>




  