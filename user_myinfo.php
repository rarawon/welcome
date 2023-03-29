<?php
$id = $_GET['id']; ?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="요리에 관심이 있는 사람들이 소통하는 사이트 입니다." />
    <meta name="author" content="라원규 (rarawon123@gmail.com)" />
    <title>내 정보</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/chef.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Core theme CSS -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">

    <!-- 헤더 -->
    <?php include 'header.php'; ?>
    <!-- 캐러셀 -->
    <?php include 'carousel.php'; ?>

    <!-- 메인화면 -->
    <div class="container-fluid maincontainer">
        <div class="row">
            <!-- 왼쪽공백 -->
            <div class="col-md-1 col-sm-1"></div>

            <!-- nav바 -->
            <?php include 'nav.php'; ?>

            <div class="col-md-8 col-sm-8">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                👤 내 정보
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>회원 정보를 확인하고 회원 관리를 하실 수 있습니다. </strong>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-sm-12">

                    <div class="container boardbox  text-center">

                        <h3 class="mb-3 text-center bold">
                            <storng>내 정보</storng>
                        </h3>

                        <img src="assets/noimage.jpg" class="myprofile" alt="">


                        <h4 class="mb-3 text-center bold">
                            <storng>아이디 : <?php echo $id; ?></storng>
                        </h4>
                        <h4 class="mb-3 text-center bold">
                            <storng>닉네임 : ??</storng>
                        </h4>
                        <h4 class="mb-3 text-center bold">
                            <storng>누적 추천 : ?개</storng>
                        </h4>
                        <h4 class="mb-3 text-center bold">
                            <storng>작성한 글 : ?개</storng>
                        </h4>
                        <h4 class="mb-3 text-center bold">
                            <storng>작성 댓글 : ?개</storng>
                        </h4>

                        <button class="btn btn-success" style="margin-bottom:10px;">회원탈퇴</button>
                        <button class="btn btn-success" style="margin-bottom:10px;">내 정보 수정</button>


                    </div>
                </div>




                <!-- 오른쪽 공백 -->
                <div class="col-md-1 col-sm-1"></div>
            </div>
        </div>
    </div>


    <!-- Footer-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/main.js"></script>
    <script src="js/time.js"></script>
</body>

</html>