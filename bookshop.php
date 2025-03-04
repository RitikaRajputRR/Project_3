<html>
    <head>
        <title>
            Admin, user
        </title>
        <style>
            .colour{
              
            
               background-image: url(bookfront1.jpg);
               background-size: cover;
              width: 100%;
              height: 600px;
                
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
                background-color:black;
                top:0px;
                left:0px;
            }
            .box{
                margin-top: 300px;
                margin-left: auto;
                margin-right: auto;
                width: 500px;
                height: 200px;
                color: black;
                box-shadow: 0 0 25px gold;
                border-radius: 20px;

            }
            .admin{
                margin-top: 300px;
                margin-left:130px;
                color: white;
                font-size: 50px;
                font-weight: bold;
                text-decoration: none;
            }
        </style>
    </head>
    <body class="colour">
        <div class="a1">
        <div class="a2">
        <div class="box">
<br>
        <a href="loginpage.php" class="admin">Admin </a>
        <a href="userloginpage.php"  class="admin">User</a>
        </div>
        </div>
        </div>
    </body>
</html>