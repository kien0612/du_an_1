<?php
function loadall_role(){
    $sql="SELECT * FROM `role` WHERE 1";
    $listrole=pdo_query($sql);
    return $listrole;
}
function delete_role($id_role){
    $sql="DELETE FROM role WHERE id_role=".$id_role;
    pdo_execute($sql);
}
// get 1 id để sửa
function sua_role($id_role){
    $sql = "select * from role where id_role =".$id_role;
    $role=pdo_query_one($sql);
    return $role;
}
function add_role($name_role){
    $sql="INSERT INTO `role`( `name_role`) VALUES ('$name_role')";
    pdo_execute($sql);
}
function update_role($id_role,$name_role){
    $sql="UPDATE `role` SET `name_role`='".$name_role."' WHERE id_role=".$id_role;
    pdo_execute($sql);
}
 ?>