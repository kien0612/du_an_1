<?php
// kiển thị tài khoản
function loadAll_tai_khoan(){
    $sql="SELECT * FROM `taikhoan` INNER JOIN role on taikhoan.id_role=role.id_role";
    $listtk=pdo_query($sql);
    return $listtk;
}
function list_role(){
    $sql="SELECT name_role as ten_role FROM `taikhoan` as a join role as b on a.name_role=b.id_role";
    $listtk=pdo_query($sql);
    return $listtk;
}
// thêm mớmới
function add_tai_khoan(  $ten_tk  ,  $sdt ,  $email, $nam_sinh, $gioi_tinh, $dia_chi, $id_role , $ngay_tao){
   $sql=" INSERT INTO  taikhoan (   ten_tk  ,  sdt ,  email, nam_sinh, gioi_tinh, dia_chi, id_role , ngay_tao)
    VALUES ( '$ten_tk',  '$sdt' ,  '$email', ' $nam_sinh',' $gioi_tinh', '$dia_chi', '$id_role' , '$ngay_tao')";
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
function update_tai_khoan($id_tk,  $ten_tk, $nam_sinh, $gioi_tinh, $sdt, $email, $dia_chi,$id_role){
    $sql="update taikhoan set ten_tk='".$ten_tk."',nam_sinh='".$nam_sinh."', gioi_tinh='".$gioi_tinh."', sdt='".$sdt."',email='".$email."',dia_chi='".$dia_chi."',id_role='".$id_role."'  WHERE id_tk=".$id_tk;
    pdo_execute($sql);
}

// thêm tài khoản từ bên ngoài

function add_tk($ten_tk,$email,$password,$ngay_tao){
    $sql=" INSERT INTO  taikhoan (   ten_tk  , email , password ,ngay_tao) VALUES ('$ten_tk' , '$email','$password','$ngay_tao')";
    pdo_execute($sql);
}

// check dăng nhập 
 function checkuser($ten_tk,$password) {
    $sql="SELECT * FROM taikhoan WHERE ten_tk='$ten_tk' and password='$password'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function sendMail($email) {
    $sql="SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
        return "Gửi email thành công";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}
function sendMailPass($email, $username, $pass) {
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '23dac9d2170c7f';                     //SMTP username
        $mail->Password   = '3717e84fb150a4';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('duanmau@example.com', 'DuAnMau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body    = 'Mau khau cua ban la' .$pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


?>