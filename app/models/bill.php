<?php 
 
function list_bill($id_tk=0){
    $sql="SELECT * FROM `sanpham` as sp join hoadonchitet as hdct on sp.id_sp=hdct.id_sp join hoadon as hd on hdct.id_hd=hd.id_hd WHERE id_tk ";
    if($id_tk>0){
        $sql.=" and id_tk ='".$id_tk."' ";
    }
    $listbill=pdo_query($sql);
    return $listbill;
}

 
?>