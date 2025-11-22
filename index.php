<?php
require_once __DIR__ . '/includes/config.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<?php
session_start();
$isLoggedIn = isset($_SESSION['admin_id']);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <title>날씨와 범죄의 상관관계 분석</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
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

        .login-btn {
            color: #1e3a8a;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
        }

        .main-container {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 50px;
        }

        .blob {
            width: 300px;
            height: 380px;
            background: #e5e7eb;
            border-radius: 65% 35% 60% 40%;
            margin-right: 70px;
        }

        .subtitle {
            color: #1e3a8a;
            font-size: 15px;
            margin-bottom: 8px;
        }

        .title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 18px;
            line-height: 1.3;
        }

        .description {
            font-size: 15px;
            line-height: 1.6;
            color: #6b7280;
            margin-bottom: 28px;
        }

        .btn-primary {
            padding: 13px 24px;
            background: #2563eb;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
        }

        .footer {
            width: 100%;
            text-align: center;
            padding: 18px 0;
            background: #697077;
            color: #e5e7eb;
            font-size: 13px;
            position: fixed;
            left: 0;
            bottom: 0;
        }
    </style>
</head>
<body>

<!-- 상단 네비게이션 바 -->
<div class="navbar">
    <?php if ($isLoggedIn): ?>
        <a class="login-btn" href="logout_process.php">Log Out</a>
    <?php else: ?>
        <a class="login-btn" href="login.php">Log In</a>
    <?php endif; ?>
</div>

<!-- 메인 영역 -->
<div class="main-container">
    <div class="blob"></div>

    <div class="main-content">
        <div class="subtitle">빅데이터 분석 시뮬레이션 프로젝트</div>
        <div class="title">날씨와 범죄의 상관관계 분석</div>
        <div class="description">
            기상 데이터와 범죄 통계를 결합하여 날씨 조건이 범죄 발생에 미치는 영향을 분석합니다.
        </div>
        <a href="weather_stats.php" class="btn-primary">분석하러 가기</a>
    </div>
</div>

<!-- 하단 Footer -->
<footer class="footer">
    2025-2 빅데이터응용 팀 쿼리라이스
</footer>

</body>
</html>
