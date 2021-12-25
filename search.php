<?php
    include 'header.php'
?>
<h1>Rezultati pretraživanja</h1>
<div class="tombola_container">
<?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM tombola WHERE broj='$search'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div>
                    	<p>".$row['nagrada']."</p>
                        <p>".$row['profesor']."</p>
                </div>";
            }
        }
        else {
            echo "Nažalost, niste osvojili ništa. Više sreće drugi put!";
        }
    }
?>
</div>
