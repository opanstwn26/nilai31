<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];
    
    $sql = "DELETE FROM majors WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=jurusan');
    }else {
        include('index.php?m=jurusan');
        echo '<script language="Javascript")';
            echo 'alert("Data gagal dihapus")';
        echo '</script>';
    }            
} else {
    echo "Jangan langsung eksekusi ke file ini, klik <a href='?m=jurusan&s=add'>disini</a>";
}    
