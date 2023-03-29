<?php
$board = $_GET['board'];
// board 값 받아오기
?>

<?php if ($board === 'recipe') { ?>
<script>
var board = "<?php echo $board; ?>";
</script>
<?php } else { ?>
<script>
var board = "another";
</script>
<?php } ?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="요리에 관심이 있는 사람들이 소통하는 사이트 입니다." />
    <meta name="author" content="라원규 (rarawon123@gmail.com)" />
    <title>글쓰기</title>
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

    <!-- 메인화면 -->
    <div class="container-fluid maincontainer">
        <div class="row">
            <!-- 왼쪽공백 -->
            <div class="col-md-1 col-sm-1"></div>

            <div class="col-md-10 col-sm-10 writingbox ">
                <div class="container boarditem">
                    <h3 class="mb-3 text-center bold">
                        <storng><?php if ($board === 'recipe') {
                            echo '레시피 작성';
                        } else {
                            echo '게시글 작성';
                        } ?></storng>
                    </h3>
                    <form name="writingform" method="POST" action="/board_<?php echo $board; ?>.php"
                        enctype="multipart/form-data">
                        <?php if ($board === 'recipe') { ?>
                        <div class="pt-1">
                            <label for="제목">레시피 이름</label>
                            <input type="text" name="title" id="제목" placeholder="레시피 이름을 작성해주세요 (10자 제한)">
                        </div>
                        <?php } else { ?>
                        <div class="pt-1">
                            <label for="제목">글의 제목</label>
                            <input type="text" name="title" id="제목" placeholder="제목을 입력하세요 (100자 제한)">
                        </div>
                        <?php } ?>
                        <!-- 레시피 작성 시에만 -->
                        <?php if ($board === 'recipe') { ?>
                        <div class="pt-1">
                            <label for="소개">레시피 소개</label>
                            <input type="text" name="intro" id="소개" placeholder="레시피에 대한 간단한 소개를 작성해주세요 (40자 제한)">
                        </div>
                        <?php } ?>
                        <?php if ($board === 'recipe') { ?>
                        <div class="pt-1">
                            <label for="contents">레시피 내용</label>
                            <textarea name="contents" id="contents" rows="10"
                                placeholder="레시피의 자세한 내용을 입력하세요 (3000자 제한)"></textarea>
                        </div>
                        <?php } else { ?>
                        <div class="pt-1">
                            <label for="contents">글의 내용</label>
                            <textarea name="contents" id="contents" rows="10"
                                placeholder="내용을 입력하세요 (3000자 제한)"></textarea>
                        </div>
                        <?php } ?>
                        <div class="addimages">
                            <label for="formFileMultiple" class="form-label">이미지</label>
                            <input type="file" name="imgFile" class="form-control" accept="image/*"
                                id="formFileMultiple" multiple>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <button type="btn btn-success btn-block" class="btn btn-secondary"
                                onclick="location.href='board_<?php echo $board; ?>.php';">목록</button>
                        </div>

                        <div class="col-md-2">
                            <button class="btn btn-success btn-block float-end" onclick="writingform_check();">작성
                                완료</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 오른쪽 공백 -->
            <div class="col-md-1 col-sm-1"></div>
        </div>
    </div>


    <!-- Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/writing.js"></script>
</body>

</html>