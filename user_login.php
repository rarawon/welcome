    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ID = $_POST['ID'];
        $Email = $_POST['Email'];
        $certify_num = $_POST['certify_num'];
        $PW = $_POST['PW'];
        $nickname = $_POST['nickname'];

        // echo "<script>alert('ID: " . $ID . ", Email: " . $Email . ", certify_num: " . $certify_num . ", PW: " . $PW . ", nickname: " . $nickname . "');</script>";
    } ?>



    <!DOCTYPE html>
    <html lang="ko">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="요리에 관심이 있는 사람들이 소통하는 사이트 입니다." />
        <meta name="author" content="라원규 (rarawon123@gmail.com)" />
        <title>Our Cooking</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/chef.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Core theme CSS -->
        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <!-- 헤더 -->
            <!-- 상단 바 -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/chef.png" alt="Logo" width="30" height="24"
                            class="d-inline-block align-text-top">
                        Our Cooking
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item"><a class="nav-link" href="user_login.php">로그인</a></li>
                            <li class="nav-item"><a class="nav-link" href="user_signup.php">회원가입</a></li>

                        </ul>
                    </div>
                </div>
            </nav>

            <!-- 로그인 -->
            <!-- 입력필수 required -->
            <div class="container">
                <div class="input-form-backgroud row">
                    <div class="input-form col-md-12 mx-auto" id="signup">
                        <h4 class="mb-3 text-center">로그인</h4>
                        <form name="signup_form" method="post" action="./index.php" novalidate data-bs-novalidate>

                            <div class="mb-3">
                                <label for="userID">아이디</label>
                                <input type="text" class="form-control" name="ID" id="userID" placeholder="아이디"
                                    value="<?php echo $ID; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="userPW">비밀번호</label>
                                <input type="password" class="form-control" name="PW" id="userPW" placeholder="비밀번호"
                                    required>
                            </div>

                        </form>

                        <div class="container">
                            <div class="row">

                                <div class="form-check form-switch col-md-3">
                                    <input class="form-check-input" type="checkbox" role="switch" id="아이디 기억" unchecked>
                                    <label class="form-check-label" for="아이디 기억">아이디 기억</label>
                                </div>

                                <div class="form-check form-switch col-md-3">
                                    <input class="form-check-input" type="checkbox" role="switch" id="자동 로그인" unchecked>
                                    <label class="form-check-label" for="자동 로그인">자동 로그인</label>
                                </div>

                                <div class="col-md-4"></div>

                                <button class="btn btn-success btn-lg btn-block col-md-2"
                                    onclick="loginform_check();">로그인</button>
                            </div>
                        </div>
                        <a class="nav-link" href="">ID/PW 찾기</a>
                    </div>
                </div>
                <footer class="my-3 text-center text-small">
                </footer>
            </div>

        </main>



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/login.js"></script>
    </body>

    </html>