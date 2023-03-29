<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ID = $_POST['ID'];
    // $Email = $_POST['Email'];
    // $certify_num = $_POST['certify_num'];
    // $PW = $_POST['PW'];
    // $nickname = $_POST['nickname'];

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

            <div class="col-md-8 col-sm-8" id="sectionbox">
                <div class="row">

                    <!-- 메인화면 공지사항 미리보기 -->
                    <article class="col-md-6 col-sm-6">
                        <table class="table  table-dark  table-hover">
                            <thead>
                                <tr>
                                    <th class="left-align">📢 공지사항</th>
                                    <th></th>
                                    <th class="right-align">
                                        <a href="/board_notice.php">더보기+</a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>관리자</td>
                                    <td>2023-03-25</td>
                                </tr>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>관리자</td>
                                    <td>2023-03-25</td>
                                </tr>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>관리자</td>
                                    <td>2023-03-25</td>
                                </tr>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>관리자</td>
                                    <td>2023-03-25</td>
                                </tr>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>관리자</td>
                                    <td>2023-03-25</td>
                                </tr>
                            </tbody>
                        </table>
                    </article>

                    <!-- 메인화면 인기 게시판 미리보기 -->
                    <article class="col-md-6 col-sm-6">
                        <table class="table  table-dark  table-hover">
                            <thead>
                                <tr>
                                    <th class="left-align">🔥 인기 게시판</th>
                                    <th></th>
                                    <th class="right-align">
                                        <a href="/board_popular.php">더보기+</a>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>👍 30</td>
                                    <td>2023-03-25</td>
                                </tr>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>👍 30</td>
                                    <td>2023-03-25</td>
                                </tr>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>👍 30</td>
                                    <td>2023-03-25</td>
                                </tr>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>👍 30</td>
                                    <td>2023-03-25</td>
                                </tr>
                                <tr class="cursor" onClick="location.href='#'">
                                    <td class="title">🔹게시글 UI 구성 제목</td>
                                    <td>👍 30</td>
                                    <td>2023-03-25</td>
                                </tr>
                            </tbody>
                        </table>
                    </article>
                </div>

                <!-- 관리자 인증 레시피 추천 -->
                <form id="main_form" method="post" action="board_post.php?board=recipe&num=9">
                    <!-- 이미지 파일을 업로드하고 임시로 저장한 경로 -->
                    <input type="hidden" name="imgPath" value="assets/3.jpg">
                    <!-- 제목, 내용 등 다른 데이터도 함께 전송할 수 있음 -->
                    <input type="hidden" name="title" value="안매운 불닭">
                    <input type="hidden" name="intro" value="저는 매운걸 잘 못먹어서 이렇게 저만의 레시피를 만들었어요!!">
                    <input type="hidden" name="contents" value="테스트">
                    <input type="hidden" name="timestamp" value="2023-03-24">
                </form>

                <!-- <a href="board_post.php?board=recipe&num=9"> -->
                <div class="card mb-3">
                    <div class="cursor" id="maincard" onclick="submitForm()">
                        <img src="assets/3.jpg" class="card-img-top" id="bestrecipe" alt="...">
                        <div class="card-body">
                            <div class="container-fluid" id="recipetext">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10">
                                        <h5 class="card-title maincard-text">오늘의 추천 레시피는 "안매운 불닭"</h5>
                                        <p class="card-text maincard-text">"저는 매운걸 잘 못먹어서 이렇게 저만의 레시피를 만들었어요!!"</p>
                                        <p class="card-text"><small class="text-muted maincard-text">이용자33
                                                2023-03-24</small>
                                        </p>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img src="assets/mark.png" id="goodmark" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- </a> -->

                <!-- 메인화면 전체 게시글 미리보기  -->
                <table class="table  table-dark  table-hover">
                    <thead>
                        <tr>
                            <th class="left-align">📑 전체 게시글</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th class="right-align">
                                <a href="/board_all.php">더보기+</a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="cursor" onClick="location.href='#'">
                            <td class="title">🔹게시글 UI 구성 제목</td>
                            <td>👍 3</td>
                            <td>👀 55</td>
                            <td>이용자??</td>
                            <td>2023-03-25</td>
                        </tr>
                        <tr class="cursor" onClick="location.href='#'">
                            <td class="title">🔹게시글 UI 구성 제목</td>
                            <td>👍 3</td>
                            <td>👀 55</td>
                            <td>이용자??</td>
                            <td>2023-03-25</td>
                        </tr>
                        <tr class="cursor" onClick="location.href='#'">
                            <td class="title">🔹게시글 UI 구성 제목</td>
                            <td>👍 3</td>
                            <td>👀 55</td>
                            <td>이용자??</td>
                            <td>2023-03-25</td>
                        </tr>
                        <tr class="cursor" onClick="location.href='#'">
                            <td class="title">🔹게시글 UI 구성 제목</td>
                            <td>👍 3</td>
                            <td>👀 55</td>
                            <td>이용자??</td>
                            <td>2023-03-25</td>
                        </tr>
                        <tr class="cursor" onClick="location.href='#'">
                            <td class="title">🔹게시글 UI 구성 제목</td>
                            <td>👍 3</td>
                            <td>👀 55</td>
                            <td>이용자??</td>
                            <td>2023-03-25</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 오른쪽 공백 -->
            <div class="col-md-1 col-sm-1"></div>
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