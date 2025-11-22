<?php
session_start();

// 이미 로그인된 경우 메인으로 리다이렉트
if (isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <title>관리자 로그인</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "Helvetica Neue", Arial, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        .navbar {
            width: 100%;
            padding: 20px 50px;
            display: flex;
            justify-content: flex-end;
            background: #ffffff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .home-btn {
            color: #1e3a8a;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
        }

        .login-container {
            display: flex;
            justify-content: center;
            padding-top: 80px;
        }

        .login-card {
            width: 450px;
            background: #ffffff;
            padding: 50px;
            border-radius: 6px;
            box-shadow: 0 1px 6px rgba(0,0,0,0.08);
        }

        .login-title {
            font-size: 28px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 10px;
        }

        .login-desc {
            text-align: center;
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 35px;
        }

        .input-label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #374151;
            margin-top: 20px;
        }

        .input-field {
            width: 100%;
            padding: 14px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            background: #f3f4f6;
            font-size: 14px;
        }

        .btn-login {
            width: 100%;
            margin-top: 30px;
            background: #2563eb;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="index.php" class="home-btn">HOME</a>
</div>

<div class="login-container">
    <div class="login-card">
        <div class="login-title">관리자 로그인</div>
        <div class="login-desc">범죄 데이터 분석 시스템 관리자 전용</div>

        <form action="login_process.php" method="POST">

            <div class="input-label">사용자명</div>
            <input type="text" name="username" class="input-field" placeholder="사용자명을 입력하세요" required />

            <div class="input-label">비밀번호</div>
            <input type="password" name="password" id="password" class="input-field" placeholder="비밀번호를 입력하세요" required />

            <button type="submit" class="btn-login">로그인</button>
        </form>
    </div>
</div>

</body>
</html>
