<?php
include '../../connection/config.php';
$error = [];
foreach ($_POST as $key => $value) {
    if ($value == '') {
        array_push($error, 'The ' . $key . ' field is required');
    }
}
if (!empty($error)) {
    echo json_encode(['success' => false, 'message' => $error]);
} else {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $religion = $_POST['religion'];
    $date_of_birth = $_POST['date_of_birth'];
    $joining_date = $_POST['joining_date'];
    $address = $_POST['address'];
    $photo = $_FILES['photo']['name'];
    $tmp_photo = $_FILES['photo']['tmp_name'];
    $upload = '../../uploads/';
    $upload_image =  time() . '-' . $photo;

    move_uploaded_file($tmp_photo, $upload . $upload_image);

    $sql = "SELECT * FROM users WHERE email='{$email}'";
    $sql_run = mysqli_query($conn, $sql);
    if (mysqli_num_rows($sql_run) > 0) {
        echo json_encode(['success' => false, 'message' => ['Email already exist']]);
    } else {
        $insert_sql = "INSERT INTO users (name,date_of_birth,gender,religion,email,phone,address,joining_date,photo,role,username,password) VALUES ('{$name}','{$date_of_birth}','{$gender}','{$religion}','{$email}','{$phone}','{$address}','{$joining_date}','{$upload_image}','{$role}','{$username}','{$password}')";
        if (mysqli_query($conn, $insert_sql)) {
            echo json_encode(['success' => true, 'message' => ['User add successfully']]);
        } else {
            echo json_encode(['success' => false, 'message' => ['Server Error']]);
        }
    }
}
