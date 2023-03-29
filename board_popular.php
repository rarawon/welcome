    <?php include 'request_post.php'; ?>

    <!DOCTYPE html>
    <html lang="ko">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="요리에 관심이 있는 사람들이 소통하는 사이트 입니다." />
        <meta name="author" content="라원규 (rarawon123@gmail.com)" />
        <title>인기 게시글</title>
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

                <div class="col-md-8 col-sm-8 boardbox">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    🔥 인기 게시판
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>인기 게시판 입니다. 조회 수와 추천수가 많은 게시글들을 확인하실 수 있습니다.</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- get으로 어떤게시판인지 함께 보내주기 -->
                    <?php $write_url = 'popular'; ?>

                    <?php include 'postlist.php'; ?>

                    <?php include 'postfooter.php'; ?>

                    <!-- 오른쪽 공백 -->
                    <div class="col-md-1 col-sm-1"></div>
                </div>
            </div>


            <!-- Footer-->

            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/board.js"></script>
            <script src="js/time.js"></script>
    </body>

    </html>