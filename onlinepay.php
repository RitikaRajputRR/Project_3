<html>
    <head>
        <title>
            pay option
        </title>
        <script>
            body{
                background-imge:black;
            }

            
        </script>
    </head>
    <body>
        <form >
        <div class="box">
           <p>Order:</p>
           <select name="t1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option> 
            <option>8</option>
            <option>9</option>
            <option>10</option>
           </select>
         
        <div><p id="t2">PAY:</p></div>
        <input type="radio" name="g" value="phonepe" name="t2"> <a href="">Phonepe</a>
        <input type="radio" name="g"  value="paytm" name="t2"><a href="">Paytm</a> 
        <input type="radio" name="g" value="Googlepay" name="t2"> <a href="">Googlepay</a>
        <input type="radio" name="g" value="other" name="t2"> <a href="">other</a>
        <input type="radio" name="g" value="cash on delivery" name="t2">cash on delivery
        <input type="submit" value="Submit" class="">
        </form>    
    </div>
        
        <?php
        if(isset($_GET['t1']))
        {
           $a=$_GET['t1'];
           $b=$_GET['t2'];
          $con=mysqli_connect('localhost','root','seedit','bookshop');
          echo $q="insert into pay values('$a','$b')";
          $result=mysqli_query($con,$q);
          if($result)
          
          {
            echo" 
            
            your order confirme
            <script>window.location='show.php'</script>";
           }
           else{
           echo"error";
           }  
       }
        ?>
    </body>
</html>