<!-- 상단 바 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="index.php">
            <img src="assets/chef.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Our Cooking
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <?php if (isset($ID)): ?>
                <li class="nav-link">
                    <div><?php echo $ID; ?> 님 반갑습니다!</div>
                </li>
                <li class="nav-item dropdown" id="myinfo">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMyinfo" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">내 정보</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMyinfo">
                        <li><a class="dropdown-item" href="user_mypost.php?board=mypost">내가 쓴 글</a></li>
                        <li><a class="dropdown-item" href="user_mycomm.php?board=user_mycomm">내가 쓴 댓글</a></li>
                        <li><a class="dropdown-item" href="user_myinfo.php?board=user_myinfo&id=<?php echo $ID; ?>">내 정보
                                관리</a></li>
                        <li><a class="dropdown-item" href="index.php" id="logout-button">로그아웃</a></li>
                    </ul>
                </li>
                <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="user_login.php">로그인</a></li>
                <li class="nav-item"><a class="nav-link" href="user_signup.php">회원가입</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>