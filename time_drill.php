<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'time_drill'; 
?>

<div class="layout">

    <!-- 왼쪽 네비게이션 바 -->
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <!-- 오른쪽 메인 화면 -->
    <main class="content">
        <h1>날짜 단계별 분석</h1>
    </main>

</div>

<style>
.layout {
    display: flex;
}

.content {
    flex: 1;
    padding: 20px;
    box-sizing: border-box;
}
</style>