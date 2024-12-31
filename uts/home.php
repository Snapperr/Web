<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ABC Hotel</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            let images = ["banner1.jpg", "banner2.jpg", "banner3.jpg"];
            let index = 0;
            setInterval(function() {
                $('#banner').attr('src', images[index]);
                index = (index + 1) % images.length;
            }, 2000);
        });
    </script>
</head>
<body>
    <header>
        <div class="logo">ABC Hotel</div>
        <nav>
            <a href="home.php">Home</a>
            <a href="price-check.php">Price Check</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <div class="content">
        <img id="banner" src="banner1.jpg" alt="Banner Image">
        <h2>Hotel Profile</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec ligula quis tortor sollicitudin ultricies. Praesent imperdiet nisl eu dictum cursus. Curabitur auctor lectus facilisis nulla ultricies tempor quis vitae dui. In hac habitasse platea dictumst. Donec ac arcu rutrum, euismod mi ac, hendrerit urna. Curabitur posuere luctus nibh, vel molestie dolor efficitur sit amet. Fusce blandit ante ipsum, ut volutpat nulla dapibus mattis. Phasellus blandit lectus eget lacinia fringilla. Vestibulum fermentum dolor urna, nec euismod dui dictum mollis. Nam luctus tempor magna ut consequat. Phasellus vel rutrum orci, a congue metus. Duis facilisis aliquam nunc ac aliquet. Aliquam commodo sollicitudin posuere. Vestibulum volutpat dolor sed ex rhoncus blandit.</p>
    </div>

    <footer>
        ABC Hotel &copy;
    </footer>
</body>
</html>