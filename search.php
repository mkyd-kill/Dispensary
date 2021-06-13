<!-- This is the search page displaying the contents that are searched -->
<?php
    include 'dbh.php';
?>
<h1>Search Results:</h1>
<div class="article-container">
<?php
    if(isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM {tablename} WHERE patName LIKE '%$search%' OR date_admitted LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if($queryResult > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='article-box'>
                    <h3>".$row['patName']."</h3>
                    <p>".$row['date_admitted']."</p>
                    </div>";
            }
        }
        else {
            echo "There are no results matching your search";
        }
    }
?>
</div>