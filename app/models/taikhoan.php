<?php
// kiển thị tài khoản
function loadAll_tai_khoan(){
    $sql="SELECT * FROM taikhoan as a join role as b on a.id_role=b.id_role WHERE 1";
    $listtk=pdo_query($sql);
    return $listtk;
}
// thêm mớmới
function add_tai_khoan(  $ten_tk ,  $password ,  $sdt ,  $email, $nam_sinh, $gioi_tinh, $dia_chi, $id_role){
   $sql=" INSERT INTO  taikhoan (   ten_tk ,  password ,  sdt ,  email, nam_sinh, gioi_tinh, dia_chi, id_role)
    VALUES ( '$ten_tk ',  '$password ',  '$sdt' ,  '$email', ' $nam_sinh',' $gioi_tinh', '$dia_chi', '$id_role')";
    pdo_execute($sql);
}
// xóa them id
function delete_tai_khoan($id_tk){
    $sql="DELETE FROM taikhoan WHERE id_tk=".$id_tk;
    pdo_execute($sql);
}
// get 1 id để sửa
function sua_tai_khoan($id_tk){
    $sql = "select * from taikhoan where id_tk =".$id_tk;
    $tk=pdo_query_one($sql);
    return $tk;
}

// updata mới
function update_tai_khoan($id_tk,  $ten_tk,  $password, $nam_sinh, $gioi_tinh, $sdt, $email, $dia_chi,$id_role){
    $sql="update taikhoan set ten_tk='".$ten_tk."',password='".$password."',nam_sinh='".$nam_sinh."', gioi_tinh='".$gioi_tinh."', sdt='".$sdt."',email='".$email."',dia_chi='".$dia_chi."',id_role='".$id_role."'  WHERE id_tk=".$id_tk;
    pdo_execute($sql);
}
    