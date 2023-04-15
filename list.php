<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="design.css">
    <link rel="icon" href="Pics/logo.png">
    <title>MU Hospital</title>
</head>
<body>

<div class="top">
        <header class="nav">
            <a href="#"><svg class="cart" width="64px" height="64px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M640 832H64V640a128 128 0 1 0 0-256V192h576v160h64V192h256v192a128 128 0 1 0 0 256v192H704V672h-64v160zm0-416v192h64V416h-64z"></path></g></svg></a>
            <nav>
                <ul class="home">
                    <li>
                    <a href="#" class="home-link">مستشفى المشرق</a>
                    </li>
                </ul>
            </nav>
            <img src="Pics/logo.png" class="logoo">
        </header>
    </div>
<div class="wave-b" id="wave0"></div>

<!-- -------------------------------------------------------------------------------- -->

<div class="db_ticket">

<table class="table">
<div class='no-tkt'>قائمة الانتظار</div>
    <tr>
        <th class="db_tbh" id="AGE">العمر</th>
        <th class="db_tbh" id="NAME">الاسم</th>
        <th class="db_tbh" id="ID">رقم</th> 
    </tr>

<!-- -------------------------------------------------------------------------------- -->

<?php 
            $host = "localhost";
            $username = "root";
            $password = "";
            $php_file = "hospital";
         
            $conn = new mysqli($host,$username,$password,$php_file);
         if ($conn-> connect_error) {
            die("Connection error ".$conn-> connect_error);
         }
         $sql = "SELECT ID, Name, Age from ticket";
         $result = $conn-> query($sql);
         if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>".$row["Age"]."</td><td>".$row["Name"]."</td><td>".$row["ID"]."</td></tr>";
            }
            echo "</table>";
         }
         else {
            echo "</table>";
            echo "<div class='no-tkt'>";
            echo "لايوجد حجز حاليا";
            echo "<br><br><br><br><br><br>";
            echo "</div>";
         }
         $conn->close();
?>
</div>
<div class="center-btn">
<a href="index.html" class="home-btn"><button class="home-btn">الرجوع</button></a>
</div>

<!-- -------------------------------------------------------------------------------- -->

<br><br><br>
<footer class="foot">
        <div class="waves">
            <div class="wave-g" id="wave1"></div>
            <div class="wave-w" id="wave2"></div>
            <div class="wave-g" id="wave3"></div>
            <div class="wave-w" id="wave4"></div>
        </div>
        <hr class="break">
        <p class="copyright">© جميع الحقوق محفوظة لدى : محمد حاتم محمد | 2023</p>
        </footer>
</body>
</html>