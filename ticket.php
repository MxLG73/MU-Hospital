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
<br><br>

<!-- -------------------------------------------------------------------------------- -->

<?php
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $php_file = "hospital";

    $conn = new mysqli($host,$username,$password,$php_file);
    if (mysqli_connect_error()){
        die('ffs :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into ticket(Name, Age, Address, Phone)
        values(?, ?, ?, ?)");
        $stmt->bind_param("sisi",$Name, $Age, $Address, $Phone);
        $stmt->execute();
        echo "<div class='center-newtkt'>";
        echo "<div class='newtkt'>";
        echo "تم الحجز بنجاح";
        echo "</div>";
        echo "</div>";
        $stmt->close();
        $conn->close();
    }
?>

</div>
<div class="center-btn">
<a href="index.html" class="home-btn"><button class="home-btn">الرجوع</button></a>
<a href="list.php" class="home-btn"><button class="home-btn">متابعة الحجز</button></a>
</div>


<br><br><br><br>
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