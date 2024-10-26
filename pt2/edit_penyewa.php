  <?php include "header.php";?>

<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main2.css" rel="stylesheet" media="all">
<br>
<br>
<br>
<br>
<br>
<br>
<br>


        <div class="wrapper wrapper--w780">
            <div style="margin-left: 120px; width: 90%; " class="card card-3">
               <div class="card-body">
                    <h2 class="title">Form Update Data</h2>
                    <form method="post" action="update_penyewa.php">

     <?php
    include"koneksi.php";
    $no = 1;
    $data = mysqli_query ($koneksi, " select 
                                            id_penyewa,
                                            nama_penyewa,
                                            no_hp,
                                            jabatan
                                      from 
                                      data_penyewa
                                      where id_penyewa = $_GET[id]");
    $row = mysqli_fetch_array ($data);
    
?>
                        <input type="hidden" name="id_penyewa" value="<?php echo $row['id_penyewa'] ; ?>">
                        <div class="input-group">
                            <input class="input--style-3" type="text" name="nama_penyewa" value="<?php echo $row['nama_penyewa'] ; ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" name="no_hp" value="<?php echo $row['no_hp'] ; ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" name="jabatan" value="<?php echo $row['jabatan'] ; ?>">
                        </div>
                        <div class="p-t-10">
                            <button style="background-color: #e14eca;" class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>



        <?php include "footer.php";?>

          
