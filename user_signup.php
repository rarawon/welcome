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
                    <img src="assets/chef.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
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

        <!-- 회원가입 -->
        <!-- 입력필수 required -->
        <div class="container">
            <div class="input-form-backgroud row">
                <div class="input-form col-md-12 mx-auto" id="signup">
                    <h4 class="mb-3 text-center">회원가입</h4>
                    <form name="signup_form" method="post" action="./user_login.php" novalidate data-bs-novalidate>

                        <div class="mb-3">
                            <label for="userID">아이디</label>
                            <input type="text" class="form-control" name="ID" id="userID" placeholder="아이디" required>
                        </div>

                        <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="email">이메일</label>
                                <input type="email" class="form-control" name="Email" id="email"
                                    placeholder="이메일@example.com" required>
                            </div>

                            <div class="col-md-2" id="certify_btn">
                                <button type="button" class="btn btn-secondary">인증</button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="certify_num">인증번호</label>
                            <input type="text" class="form-control" name="certify_num" id="certify_num"
                                placeholder="이메일을 확인해주세요." required>
                        </div>

                        <div class="mb-3">
                            <label for="userPW">비밀번호</label>
                            <input type="password" class="form-control" name="PW" id="userPW"
                                placeholder="영문자+숫자+특수문자 조합 8~25자리" required>
                        </div>

                        <div class="mb-3">
                            <label for="checkPW">비밀번호 확인</label>
                            <input type="password" class="form-control" id="checkPW" placeholder="비밀번호 확인" required>
                        </div>

                        <div class="mb-3">
                            <label for="nickname">닉네임</label>
                            <input type="text" class="form-control" name="nickname" id="nickname" placeholder="닉네임"
                                required>
                        </div>
                    </form>
                    <!-- type="submit" 안준다. 유효성 검사 해야하기때문에 js를 통해 통과 후 submit -->
                    <button class="btn btn-success btn-lg btn-block float-end" onclick="signupform_check();">가입
                        완료</button>
                </div>
            </div>
            <footer class="my-3 text-center text-small">
            </footer>
        </div>
    </main>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/signup.js"></script>
</body>

</html>