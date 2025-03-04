<html>
    <head>
        <title>
            home databse page
        </title>
    </head>

    <style>
        .colour{
            background-image: url(bookfront.2jpg.jpg);
            
            width: 100%;
            height: 500px;

        }
        nav{
            background-color:peachpuff ;
        }
        nav li{
            display: inline-block;
            padding: 40px 60px;
        }
        nav li:hover
        {
            background-color: white;
        }

        nav a{
            color: black;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
    <body class="colour">
    <?Php
    session_start();
    if(isset($_SESSION['p'])==false)
    {
        echo"<script>window.location='loginpage.php'</script>";
    }
    else{
     echo" <nav>
     <li><a href='addbook.php'>Addbook </a></li>
     <li><a href='bookrequest.php'>Bookrequest</a></li>
     <li><a href='logout.php'>Logout</a></li>
     <li><a href='Pay.php'>PAYrequest</a></li>
           </nav>
           "
           ;
    }
    ?>
    </body>

</html>