<html>
    <head>
        <title>
            Add book
        </title>
        <style>
            .box{
                width: 50%;
               float: left;
            }
            .box1{
                width: 50%;
               float: left;
            }
            .colour{
                background-color: palegoldenrod;
            }

           .z {
            margin-top: 20px;
                color: black;
                font-size: 40px;
                text-align: center;
                font-weight: bold;
            }
            .y{
                color: black;
                font-size: 18px;
                margin-left: 80px;
                margin-top: 10px;

            }
            .x{
                width: 500px;
                height: 30px;
                margin-left: 80px;
                margin-top: 10px;
            }
           
            .submit{
                color: white;
                background-color: blue;
                width: 80px;
                height: 30px;
                margin-top: 30px;
                margin-left: 100px;
               
            }
        </style>
    </head>
    <body class="colour">
        <form action="addbookDB.php" method="POST" enctype="multipart/form-data">
        <p class="z">Addbooks</p>
            <div class="box">
               
            <table>
                <tr>
                    <td><p class="y">BookName:</p></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="t1" class="x"></td>
                </tr>
                <tr>
                    <td><p class="y">Publiser:</p></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="t2" class="x"></td>
                </tr>
                <tr>
                    <td><p class="y">Edition:</p></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="t3" class="x"></td>
                </tr>
                <tr>
                    <td><p class="y">Authore:</p></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="t4" class="x"></td>
                </tr>

                <tr>
                    <td><p class="y">Photo:</p></td>
                    </tr>
                    <tr>
                    <td><input type="file" name="t5" class="x"></td>
                </tr>
               <tr>
                    <td><p class="y">Price:</p></td>
                    </tr>
                    <tr>
                    <td><input type="text" name="t6" class="x"></td>
                </tr>
               </table>
               <input type="submit" value="submit" class="submit">
            </div>
            <div class="box1">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <img src="bookfront.2jpg.jpg" width="550px" height="300px" >
            </div>
        </form>
    </body>
</html>