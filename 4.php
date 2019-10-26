<?php

function hitungVoucer($kode, $total)
{
    $result='';
    $result.='<b>Kode Voucer : '.$kode.'</b>';
    $result.='<br>Uang Belanja <b> Rp.'.number_format($total).'</b><br><hr>';

    if($kode=='DumbwaysAsik'){

        if($total<20000){
            $result= "Anda tidak dapat potongan, jumlah yang harus dibayar <b> Rp. ".$total.'</b>';
        }else{

            $maks = (($total*50/100)>20000)? 20000 : ($total*50/100);
            $result.="Diskon <b> Rp.".number_format($maks).'</b>';
            $result.= "<br>Uang yang harus dibayar : <b> Rp.".number_format($total - $maks).'</b>';
            $result.= "<br> Kembalian <b> Rp.".number_format($total-($total - $maks)).'</b>';
        }
    }
    

    if($kode=='DumbwaysMantap'){

        if ($total<50000){
            $result= "Anda tidak dapat potongan, jumlah yang harus dibayar <b> Rp. ".$total.'</b>';

        }else{

            $maks = (($total*30/100)>40000)? 40000 : ($total*30/100);
            $result.="Diskon : Rp.".number_format($max_diskon);
            $result.= "<br>Uang yang harus dibayar <b> Rp.".number_format($total - $maks).'</b>';
            $result.= "<br> Kembalian <b> Rp.".number_format($total-($total - $maks)).'</b>';
        }
    }
      
    return $result;
}
echo hitungVoucer('DumbwaysAsik',30000);