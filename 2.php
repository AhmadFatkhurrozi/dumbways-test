<?php
function hitungKembalian($total_belanja, $uang_dibayarkan)
{
   
    echo 'Total Belanja : <b> Rp. '.$total = $total_belanja; echo '</b><hr>';
    echo '<br>Uang Yang dibayarkan : <b> Rp. '.$bayar = $uang_dibayarkan; echo '</b>';

    $cashback = $total/10;
    $kembali = $uang_dibayarkan-$total_belanja;
    $count50=0;
    $count20=0;
    $count5=0;
    $pecahan50='';
    $pecahan20='';
    $pecahan5='';

    if($total>200000){
        echo "<br> Cashback 10 % = <b> Rp. ".$cashback.'</b>';
        $total = $total-$cashback;
        $kembalian = $bayar-$total;
        echo '<br> Uang Kembalian = <b> Rp.'.$kembali.' + Rp. '.$cashback.' = Rp. '.$kembalian.'</b><br><br><hr><br>';
        echo 'Pecahan Yang Dikembalikan : <br>';
        echo '<b>';
    }else{
        echo '<br>Uang Kembalian: <b> Rp.'.$kembalian = $bayar-$total;
        echo '<br><br></b><hr>';
        echo 'Pecahan Yang Dikembalikan : <br>';
        echo '<b>';
    }
    
while ($kembalian>0) {

    if ($kembalian>=50000) {
        $count50++;
        $result = "50000";
        $pecahan50 = $count50.' X '.$result.'<br>';
        $kembalian = $kembalian-$result;
    }
    if ($kembalian>=20000) {
        $count20++;
        $result = "20000";
        $pecahan20= $count20.' X '.$result.'<br>';
        $kembalian = $kembalian-$result;
    }
    if ($kembalian>=5000) {
        $count5++;
        $result = "5000";
        $pecahan5= $count5.' X '.$result.'<br>';
        $kembalian = $kembalian-$result;
    }
    if($kembalian<5000){
        $sumbangkan="</b><br>Uang sebesar ".$kembalian." Di sumbangkan Karena tidak ada pecahan dibawah <b>Rp. 5000</b>";
        $kembalian=0;
    }
}

return '<br>'.$pecahan50.$pecahan20.$pecahan5.$sumbangkan;

}

echo hitungKembalian(220000,250000); // (Total Belanja , Uang Dibayar)