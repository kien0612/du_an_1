<?php 
function list_bill(){
    $sql="SELECT * FROM `hoadonchitet` join sanpham on hoadonchitet.id_sp=sanpham.id_sp";
    $listbill=pdo_query($sql);
    return $listbill;
}
?>