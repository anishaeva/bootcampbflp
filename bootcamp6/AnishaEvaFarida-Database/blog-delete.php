<?php
require("db.php");
require("functions.php");

$blog_id = $_GET["id"];

$query = "DELETE FROM blog_posts WHERE id = $blog_id";
mysqli_query($db, $query);
$berhasil = mysqli_affected_rows($db);

if ($berhasil > 0) {
    echo "
    <script>
        alert('Blog successfully deleted');
        document.location.href = 'index.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Blog failed to delete');
        document.location.href = 'index.php';
    </script>
";
}
