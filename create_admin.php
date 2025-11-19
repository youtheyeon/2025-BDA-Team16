<?php
// DB 연결
$conn = new mysqli("localhost", "team16", "team16", "team16");

// 생성할 관리자 정보 (ID: team16 / PW: team16)
$admin_id = "team16";
$admin_pw = "team16"; 

// 비밀번호 암호화 (해싱)
$hashed_pw = password_hash($admin_pw, PASSWORD_DEFAULT);

// DB에 저장
$sql = "INSERT INTO Admins (username, password_hash) VALUES ('$admin_id', '$hashed_pw')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>관리자 계정 생성 완료!</h3>";
    echo "ID: $admin_id <br>";
    echo "PW: $admin_pw (DB에는 암호화되어 저장됨)";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>