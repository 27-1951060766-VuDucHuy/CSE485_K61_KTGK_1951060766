    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Libary Management</title>
    </head>
    <body>
        
<?php 
    include("config/config.php");


    if(isset($_POST['themthongtin'])) {
        $tendocgia = $_POST['hovaten'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];
        $nghenghiep = $_POST['nghenghiep'];
        $ngaycapthe = $_POST['ngaycap']; 
        $ngayhethan = $_POST['ngayhet'];
        $diachi      = $_POST['diachi'];

        $sql_insert = "INSERT into docgia(bd_hovaten,bd_gioitinh,bd_namsinh,bd_nghenghiep,bd_ngaycapthe,bd_ngayhethan,bd_diachi)
            values (' $tendocgia',' $gioitinh','$namsinh','$nghenghiep','$ngaycapthe','$ngayhethan','$diachi)";
            
        mysqli_query($conn,$sql_insert);
        header('location: index.php');
        
    }
?>

    <?php
        include('header.php');
    ?>
    <div class="container">
        <h1 >Thêm Danh Sách Thông tin đọc giả</h1>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="hovaten" class="form-label">Họ và Tên</label>
                <input type="text" name="hovaten" class="form-control" id="hovaten" >
            </div>
            <div class="mb-3">
                <label for="gioitinh" class="form-label">Giới Tính</label>
                <input type="text" name="gioitinh" class="form-control" id="gioitinh" >
            </div>
            <div class="mb-3">
                <label for="namsinh" class="form-label">Năm Sinh</label>
                <input type="text" name="namsinh" class="form-control" id="namsinh" >
            </div>

            <div class="mb-3">
                <label for="nghenghiep" class="form-label">Nghề Nghiệp </label>
                <input type="text" name="nghenghiep" class="form-control" id="nghenghiep" >
            </div>

            <div class="mb-3">
                <label for="ngaycapthe" class="form-label">Ngày Cấp Thẻ  </label>
                <input type="text" name="ngaycapthe" class="form-control" id="ngaycapthe" >
            </div>

            <div class="mb-3">
                <label for="ngayhethan" class="form-label">Ngày Hết Hạn  </label>
                <input type="text" name="ngayhethan" class="form-control" id="ngayhethan" >
            </div>

            <div class="mb-3">
                <label for="diachi" class="form-label">Địa chỉ  </label>
                <input type="text" name="diachi" class="form-control" id="diachi" >
            </div>
            
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="themdanhba">Thêm</button>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>
