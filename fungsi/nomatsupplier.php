
<?php
  // membuat query max untuk kode barang
  $carikode = mysqli_query($conn,"select max(kode_supplier) from tbl_supplier");
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($datakode[0], 2);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $hasilkode1 = "SP".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $hasilkode1 = "SP001";
  }

 ?>
