<?php 
function getData($query) {
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function addData($data) {
    global $db;
    
    $title = htmlspecialchars($data["title"]);
    $body = $data["content"];

    $query = "INSERT INTO blog_posts VALUES ('', 1, '', '$title', '$body', '')";

    mysqli_query($db, $query);
    $berhasil = mysqli_affected_rows($db);
    return $berhasil;
}

function deleteData() {
    
}
?>