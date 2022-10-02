<?php
require 'ClassPegawai.php';


$faiz = new Pegawai('011022001', 'Faizuddin Al Qossam', 'Manager', 'muslim', 'menikah');
$fidel = new Pegawai('01102202', 'Fidel Achmad', 'Asisten Manager', 'krislam', 'belum menikah');
$fadli = new Pegawai('02202203', 'Fadli Ilyas', 'Kepala Bagian', 'kristen', 'menikah');
$faza = new Pegawai('01100223', 'Faza Syarbini', 'Staff', 'krislam', 'belum menikah');
$fazan = new Pegawai('22012002', 'Fazan Lubis', 'Asisten Manager', 'hindu', 'belum menikah');

//panggil fungsi
echo '<h2 align="center">'.Pegawai::title.'</h3><br />';
$faiz->mencetak();
$fidel->mencetak();
$fadli->mencetak();
$faza->mencetak();
$fazan->mencetak();
echo 'Jumlah Pegawai : '.Pegawai::$jumlah.' orang';
