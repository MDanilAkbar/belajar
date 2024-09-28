<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "belajar";
    
    $koneksi = mysqli_connect($host,$username,$pass,$db);

?>

 <!-- Tombol Edit 
 <a href="form_edit_datahibah.php?idedit=<?=$q['id']?>" type="button" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                
                                                 Tombol Hapus 
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$q['id']?>">
                                                <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                                -->