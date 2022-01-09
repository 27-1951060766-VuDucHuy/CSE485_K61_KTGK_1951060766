    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Library Management</title>
    </head>
    <body>
    <?php 
    include("config/config.php");


    if(isset($_POST['submit'])) {
        $tendocgia = $_POST['hovaten'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];
        $nghenghiep = $_POST['nghenghiep'];
        $ngaycapthe = $_POST['ngaycap']; 
        $ngayhethan = $_POST['ngayhet'];
        $diachi      = $_POST['diachi']; 

        $sql_update = "UPDATE docgia set bd_hovaten = '$tendocgia',bd_gioitinh = '$gioitinh',bd_namsinh = '$namsinh',bd_nghenghiep = '$nghenghiep',bd_ngaycapthe = '$ngaycapthe',bd_ngayhethan = '$ngayhethan', bd_diachi = '$diachi' where bd_madg = '$id'";
        mysqli_query($conn,$sql_update);
        header('location: index.php');
    }
?>


    <?php
        include('header.php');
    ?>
    <?php 
        include ("config/config.php");
        if(isset($_GET['bd_madg'])) {
            $id = $_GET['bd_madg'];

            $sql = "SELECT * FROM docgia WHERE bd_madg = '$id'";
            $result = mysqli_query($conn, $sql);
        }
    ?>
    <div class="container">
        <h1>Sửa danh sách thông tin độc giả </h1>
        <?php while($row = mysqli_fetch_assoc($result)){?>
            <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="hovaten" class="form-label">Họ và Tên</label>
                <input type="text" name="hovaten" class="form-control" id="hovaten" value="<?php echo $row['bd_hovaten']; ?>">
            </div>

            <div class="mb-3">
                <label for="gioitinh" class="form-label">Giới Tính</label>
                <input type="text" name="gioitinh" class="form-control" id="gioitinh" value="<?php echo $row['bd_gioitinh']; ?>">
            </div>

            <div class="mb-3">
                <label for="namsinh" class="form-label">Năm Sinh</label>
                <input type="text" name="namsinh" class="form-control" id="namsinh" value="<?php echo $row['bd_namsinh']; ?>">
            </div>

            <div class="mb-3">
                <label for="nghenghiep" class="form-label">Nghề Nghiệp</label>
                <input type="text" name="nghenghiep" class="form-control" id="nghenghiep" value="<?php echo $row['bd_nghenghiep']; ?>">
            </div>

            <div class="mb-3">
                <label for="ngaycapthe" class="form-label">Ngày Cấp Thẻ </label>
                <input type="text" name="ngaycapthe" class="form-control" id="ngaycapthe" value="<?php echo $row['bd_ngaycapthe']; ?>">
            </div>

            <div class="mb-3">
                <label for="ngayhethan" class="form-label">Ngày Hết Hạn  </label>
                <input type="text" name="ngayhethan" class="form-control" id="ngayhethan" value="<?php echo $row['bd_ngayhethan']; ?>">
            </div>

            <div class="mb-3">
                <label for="diachi" class="form-label">Địa chỉ  </label>
                <input type="text" name="diachi" class="form-control" id="diachi" value="<?php echo $row['bd_diachi']; ?>">
            </div>

            <input type="hidden" name="bd_madg" class="form-control" id="bd_madg" value="<?php echo $row['bd_madg']; ?>">
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Lưu</button>
        </form>
        <?php } ?>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>