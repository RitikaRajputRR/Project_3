<html>
    <head>
        <title>
            registration page
        </title>
        <style>
             .colour{
               background-image:url(bookfront7.jpeg);
            background-size: cover;
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
            .box{
                margin-top: 200px;
                margin-left: 200px;
                width: 500px;
                height: 350px;
                color: white;
                box-shadow: 0 0 25px ;
                border-radius: 20px;

            }
            .z
            {
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
                height: 30px;
                margin-left: 10px;
                margin-top: 10px;
            }
            .submit{
                color: white;
                background-color: blue;
                width: 80px;
                height: 30px;
                margin-top: 10px;
                margin-left: 200px;
            }


        </style>
    </head>
    <body class="colour">
        <form action="userregistrationDBpage.php">
        <div class="a1">
            </div>
            <div class="a2">
            <div class="box">
                <br>
                <p class="z">Registration</p>
               <table>
                <tr>
                    <td><p class="y">Id:</p></td>
                    <td><input type="text" name="t1" class="x"></td>
                </tr>
                <tr>
                    <td><p class="y">Name:</p></td>
                    <td><input type="text" name="t2" class="x"></td>
                </tr>
                <tr>
                    <td><p class="y">Email:</p></td>
                    <td><input type="text" name="t3" class="x"></td>
                </tr>
                <tr>
                    <td><p class="y">Password:</p></td>
                    <td><input type="text" name="t4" class="x"></td>
                </tr>
               </table>
               <input type="submit" value="submit" class="submit">
            </div>
            </div>
            
        </form>
    </body>
</html>