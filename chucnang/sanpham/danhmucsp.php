<?php
$sql="SELECT * FROM dmsanpham";
$query=mysqli_query($conn,$sql);
?>   

<div class="menu">
    <li><a href="index.php">Trang Chủ</a></li>
    <?php
    while($row=mysqli_fetch_array($query)){
    ?>
    <li><a href="index.php?page_layout=sanpham&id_dm=<?php echo $row['id_dm']; ?>"><?php echo $row['ten_dm']; ?></a>
        <ul class="submenu">
            <li><a href="#">Máy ảnh Canon</a></li>
            <li><a href="#">Máy ảnh Nikon</a></li>
            <li><a href="#">Máy ảnh Sony</a></li>
            <li><a href="#">Máy ảnh Fujifilm</a></li>
            <li><a href="#">Máy ảnh Panasonic</a></li>
            <li><a href="#">Máy ảnh Olympus</a></li>
        </ul>
    </li>
    <?php
    }
    ?>
</div>