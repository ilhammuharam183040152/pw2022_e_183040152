<?php
// date, utk menentukan tanggal dengan format tertent
// echo date("l, d-M-Y") ; 

// time
// UNIX timestamp / EPOCH time
// echo time() ;
// echo date("l", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik,, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,29,04,2000)) ;

//strtotime
echo date("l", strtotime("29 apr 2000")) ; 

?>