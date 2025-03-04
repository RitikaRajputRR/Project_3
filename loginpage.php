<html>
    <head>
        <title>
           login page
        </title>
        <style>
             .colour{
               background-image:url(bookfront5.jpg);
               background-size: cover;
            
            } 
            .box{
                margin-top: 100px;
                margin-left: auto;
                margin-right: auto;
                width: 500px;
                height: 300px;
                color: black;
                box-shadow: 0 0 25px gold;
                border-radius: 20px;

            }
            .a1{
               position: absolute;
                width: 100%;
                height: 100%;
                background-color:black;
                top:0px;
                left:0px;

                opacity: 0.3
            } 
            .a2{
                position: relative;
                width: 100%;
                height: 100%;
                
                top:0px;
                left:0px;
            }
            .reg{
                
                margin-left:200px ;
                color: greenyellow;
                font-size: 20px;
                
            }

           .z {
                color: white;
                font-size: 30px;
                text-align: center;
            }
            .y{
                color: white;
                font-size: 18px;
                margin-left: 80px;

            }
            .x{
                width: 250px;
                height: 35px;
                margin-top: 10px;
                margin-left: 10px;
            }
            .submit{
                color: white;
                background-color: blue;
                width: 80px;
                height: 30px;
            }


        </style>
    </head>
    <body class="colour">
        <form action="loginDBpage.php">
            <br>
        <div class="a1"></div>
            <div class="a2">
                <br>
            <div class="box">
                <br>
                <p class="z">Loginpage</p>
                
                
               <table>
                <tr>
                    <td><p class="y">Id:</p></td>
                    <td><input type="text" name="t1" class="x"></td>
                </tr>
               
                <tr>
                    <td><p class="y">Password:</p></td>
                    <td><input type="text" name="t2" class="x"></td>
                </tr>
               </table>
               <br>
               <br>
               
               <table>
                <tr><td> <p><a href="registrationpage.php" class="reg">Registration</a></p></td>
              <td> <input type="submit" value="submit" class="submit"></td></tr>
               </table>
              
            </div>
            </div>
        </form>
    </body>
</html>