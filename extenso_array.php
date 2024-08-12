<?php
header('Content-Type:text/html; charset=UTF-8');
$v="";
if(isset($_GET['v'])){
    $v=$_GET['v'];
}
$unidade = ["Um","Dois","Três","Quatro","Cinco","Seis","Sete","Oito","Nove","Dez","Onze","Doze","Treze","Quatorze","Quinze","Dezesseis","Dezessete","Dezoito","Dezenove","Vinte"];
$dezenas = ["Vinte","Trinta","Quarenta","Cinquenta","Sessenta","Setenta","Oitenta","Noventa"];
$centenas = ["Cento","Duzentos","Trezentos","Quatrocentos","Quinhentos","Seiscentos","Setecentos","Oitocentos","Noventos"];
$posicao_d=0;
$posicao_u=1;
$c=0;
//echo "<td>$v</td>"; 
if($v=="100"){
    echo "Cem";
    die();
}
if($v>99 && $v<1000){
    $posicao_d=1;
    $posicao_u=2;
    if(substr($v,1,2)=="00"){
        $c = substr($v,0,1);
        echo $centenas[$c-1];
        die();
    }else{
        $c = substr($v,0,1);
        echo $centenas[$c-1]." e ";
    }
}
$dezena = intval(substr($v,$posicao_d,2));
if($dezena<=20)
    echo $unidade[$dezena-1];
else if(substr($v,1,1)==0){
    $d = substr($v,$posicao_d,1);
    echo $dezenas[$d-2];
}else{
    $d = substr($v,$posicao_d,1);
    $u = substr($v,$posicao_u,1);
    if(substr($v,2,1)=="0"){
        echo $dezenas[$d-2];
    }else{
        echo $dezenas[$d-2]." e ".$unidade[$u-1];
    }

}