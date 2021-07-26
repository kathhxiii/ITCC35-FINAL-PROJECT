<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
    <header>
        <div class="main">
            <div class="logo">
                <img src="logo.jpg">
                </div>
                <ul class="main1">
                    <li><a href="C:\Users\Hp\Desktop\Web\index.html">Home</a></li>
                    <li><a href="C:\Users\Hp\Desktop\Web\abt.html">About</a></li>
                    <li><a href="#">Pharmacies</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Medicine</a></li>
                </ul>
                <ul class="register">
                    <li><a href="C:\Users\Hp\Desktop\Web\Login.html">Log In</a></li>
                    <li><a href="C:\Users\Hp\Desktop\Web\SignUp.html">Sign Up</a></li>
            </ul>
        </div>
         <div class="content">
        <img src="bg3.jpg" style="width:100%">
       </div>
    </header>

    <style>
        body {
                background-image: url('bg.jpg');
             }
    </style>

    <h2> Medicine Price Comparison </h2>
    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    
</body>
</html>

<?php
$con = new PDO("mysql:host=localhost;dbname=medicine,'root','');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM 'medicinelist' WHERE name = '$str');

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Pharmacy</th>
                <th>Price</th>
            </tr>
            <tr>
                <td><?php echo $row->Name; ?></td>
                <td><?php echo $row->Pharmacy; ?></td>
                <td><?php echo $row->Price; ?></td>
            </tr>

        </table>

        <?php 
        else{
            echo "Name does not exist";
        }
}

?>
