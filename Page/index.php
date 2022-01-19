
<?php
    include 'snow.html'
?>


<h1 id="naslov1">Tombola 2021</h1>
<p id="tekst1">Upišite broj tombole</p>
<?php
    include 'dbh.php'
?>

<script>
    function theme() {
     var element = document.body;
     element.classList.toggle("dark-mode");
}
</script>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>"> 


</head>
<body>
    <p id="sponsor">©Sponsored by Đurđa</p>
<form action="search.php" method="POST">
    <input id="input" type="text" name="search" placeholder="Broj tombole">
    <br>
    <br>
    <button type="submit" name="submit-search" id="bt1">Provjeri</button>
    
</form>


<div class="tombola_container">
    <?php
        $sql = "SELECT * FROM tombola";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);  //how many rows of results we get from query
        
    ?>
</div>
<?php
    include 'ch_countdown.html'
?>
<?php
    include 'ny_countdown.html'
?>


</body>
</html>
