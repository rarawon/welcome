<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="요리에 관심이 있는 사람들이 소통하는 사이트 입니다." />
    <meta name="author" content="라원규 (rarawon123@gmail.com)" />
    <title>문의하기</title>
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

            <div class="col-md-8 col-sm-8 writingbox ">

                <div class="col-md-12 col-sm-12" id="sectionbox">

                    <div class="container boarditem">
                        <h3 class="mb-3 text-center bold">
                            <storng>문의 작성</storng>
                        </h3>
                        <form name="writingform" method="POST" action="/index.php" enctype="multipart/form-data">
                            <div class="pt-1">
                                <label for="제목">문의 제목</label>
                                <input type="text" name="title" id="제목" placeholder="문의 제목을 입력하세요">
                            </div>
                            <div class="pt-1">
                                <label for="제목">답변 받으실 메일</label>
                                <input type="text" name="title" id="제목" placeholder="문의 작성자의 메일을 입력하세요">
                            </div>
                            <div class="pt-1">
                                <label for="contents">문의 내용</label>
                                <textarea name="contents" id="contents" rows="10" placeholder="문의 내용을 입력하세요"></textarea>
                            </div>
                        </form>
                        <button class="btn btn-success btn-block float-end" style="margin-bottom:10px;">문의 발송</button>
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