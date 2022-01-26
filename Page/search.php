<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    include 'index.php'
?>
<h2>Rezultat:</h2>
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

<?php
    include 'header.php'
?>

<div class="tombola_container">
<?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM tombola WHERE broj='$search'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<span class="rez1" style="color:#AFA;"> <div>
                    	<p>Čestitam! Osvojili ste (nagrada): <u>'.$row['nagrada'].'</u><u> kod (profesor): <u>'.$row['profesor'].'</u></p>
                        
                </div></span>';
            }
        }
        else {
            echo '<span class="rez1" style="color:#ff6969;">Nažalost, niste osvojili ništa. Više sreće drugi put!</span>';
            
        }
    }
?>
</div>

