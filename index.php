<?php
    include 'header.php'
?>

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search"></button>
</form>

<h1>Tombola 2021</h1>
<br>
<p>Upišite broj tombole</p>
<div class="tombola_container">
    <?php
        $sql = "SELECT * FROM tombola";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);  //how many rows of results we get from query
        
        if ($queryResults > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div>
                    	<p>".$row['nagrada']."</p>
                        <p>".$row['profesor']."</p>
                </div>";
            }
        }
    ?>
</div>

</body>
</html>