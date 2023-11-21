<?php  

function loadAll_khuyen_mai(){
    $sql="SELECT * FROM khuyenmai WHERE 1";
    $listkm=pdo_query($sql);
    return $listkm;
}
function delete_khuyen_mai($id_KM){
    $sql="DELETE FROM khuyenmai WHERE id_KM=".$id_KM;
    pdo_execute($sql);
}
// get 1 id để sửa
function sua_khuyen_mai($id_KM){
    $sql = "select * from khuyenmai where id_KM =".$id_KM;
    $km=pdo_query_one($sql);
    return $km;
}
function add_khuyen_mai($ma_KM, $phan_tram_km, $ngay_bat_dau, $ngay_ket_thuc, $trang_thai){
    $sql="INSERT INTO khuyenmai( ma_KM, phan_tram_km, ngay_bat_dau, ngay_ket_thuc, trang_thai)
     VALUES ( '$ma_KM',' $phan_tram_km', '$ngay_bat_dau', '$ngay_ket_thuc', '$trang_thai')";
    pdo_execute($sql);
}
function update_khuyen_mai($id_KM,$ma_KM, $phan_tram_km, $ngay_bat_dau, $ngay_ket_thuc, $trang_thai){
    $sql="UPDATE `khuyenmai` SET `ma_KM`='".$ma_KM."',`phan_tram_km`='".$phan_tram_km."',`ngay_bat_dau`='".$ngay_bat_dau."',`ngay_ket_thuc`='".$ngay_ket_thuc."',`trang_thai`='".$trang_thai."' WHERE id_KM=".$id_KM;
    pdo_execute($sql);

}
?>