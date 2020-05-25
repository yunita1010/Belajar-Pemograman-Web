<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
		include 'crud.php';
        include '../../conf.php'; 
        include '../../conn.php'; ob_start(); 
        $hasil = $koneksi->prepare("SELECT * FROM sekolah WHERE id = '".get('id')."'"); 
        $hasil->execute(); 
        $data = $hasil->fetch(PDO::FETCH_OBJ); 
    ?>
    <h1><img style="max-width:50px;" src="../../assets/foto/<?php echo $data->logo;?>"> <?php echo $data->nama;?></h1> 
    <h3><?php echo $data->alamat;?></h3> 
    <?php 
        $html = ob_get_clean(); 
        $dompdf = new Dompdf\Dompdf();
        $dompdf->loadHtml($html); 
        $dompdf->setPaper('A4', 'landscape'); 
        $dompdf->render(); $pdf = $dompdf->output();
        $dompdf->stream('laporan.pdf',array('Attachment' => 0)); 
    ?>
</body>
</html>