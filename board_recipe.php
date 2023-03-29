    <?php include 'request_post.php'; ?>

    <!DOCTYPE html>
    <html lang="ko">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="요리에 관심이 있는 사람들이 소통하는 사이트 입니다." />
        <meta name="author" content="라원규 (rarawon123@gmail.com)" />
        <title>레시피</title>
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
                                    📖 레시피
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>레시피 게시판 입니다. 일정 추천 수가 넘으면 추천 레시피에 등록됩니다. </strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- get으로 어떤게시판인지 함께 보내주기 -->
                    <?php $write_url = 'recipe'; ?>
                    <div class="container recipecard">
                        <div class="row">

                            <?php if ($title): ?>
                            <form id="card_form" method="post"
                                action="board_post.php?board=<?php echo $write_url; ?>&num=6">
                                <!-- 이미지 파일을 업로드하고 임시로 저장한 경로 -->
                                <input type="hidden" name="imgPath" value="<?php echo $myFile; ?>">
                                <!-- 제목, 내용 등 다른 데이터도 함께 전송할 수 있음 -->
                                <input type="hidden" name="title" value="<?php echo $title; ?>">
                                <input type="hidden" name="intro" value="<?php echo $intro; ?>">
                                <input type="hidden" name="contents" value="<?php echo $contents; ?>">
                                <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
                            </form>

                            <div class="col-4 ">
                                <div class="card cursor" id="card" onclick="submitForm()">
                                    <?php if (isset($myFile)): ?>
                                    <img src='<?php echo $myFile; ?>' class="card-img-top1" />
                                    <?php else: ?>
                                    <img src="assets/noimage.jpg" class="card-img-top1" alt="...">
                                    <?php endif; ?>

                                    <div class="card-body">
                                        <h5 class="card-title "><?php echo $title; ?></h5>
                                        <p class="card-text "><?php echo $intro; ?></p>
                                        <div class="div">
                                            <span class="down">유저이름</span>
                                            <!-- <img src="assets/mark.png" class="mark" id="goodmark" alt="..."
                                                style="width: 70px; height: 50px;"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="col-4"></div>
                            <?php endif; ?>



                            <div class="col-4">
                                <div class="card cursor" onclick="location.href='board_post.php'">
                                    <img src="assets/3.jpg" class="card-img-top1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">안매운 불닭</h5>
                                        <p class="card-text">저는 매운걸 잘 못먹어서 이렇게 저만의 레시피를 만들었어요!!</p>
                                        <div class="div">
                                            <span class="down float-end">이용자 33</span>
                                            <img src="assets/mark.png" class="mark" id="goodmark" alt="..."
                                                style="width: 70px; height: 50px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card cursor" onclick="location.href='board_post.php'">
                                    <img src="assets/3.jpg" class="card-img-top1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">안매운 불닭</h5>
                                        <p class="card-text">저는 매운걸 잘 못먹어서 이렇게 저만의 레시피를 만들었어요!!</p>
                                        <div class="div">
                                            <span class="down float-end">이용자 33</span>
                                            <img src="assets/mark.png" class="mark" id="goodmark" alt="..."
                                                style="width: 70px; height: 50px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="card cursor" onclick="location.href='board_post.php'">
                                    <img src="assets/3.jpg" class="card-img-top1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">안매운 불닭</h5>
                                        <p class="card-text">저는 매운걸 잘 못먹어서 이렇게 저만의 레시피를 만들었어요!!</p>
                                        <div class="div">
                                            <span class="down float-end">이용자 33</span>
                                            <img src="assets/mark.png" class="mark" id="goodmark" alt="..."
                                                style="width: 70px; height: 50px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card cursor" onclick="location.href='board_post.php'">
                                    <img src="assets/3.jpg" class="card-img-top1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">안매운 불닭</h5>
                                        <p class="card-text">저는 매운걸 잘 못먹어서 이렇게 저만의 레시피를 만들었어요!!</p>
                                        <div class="div">
                                            <span class="down float-end">이용자 33</span>
                                            <img src="assets/mark.png" class="mark" id="goodmark" alt="..."
                                                style="width: 70px; height: 50px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card cursor" onclick="location.href='board_post.php'">
                                    <img src="assets/3.jpg" class="card-img-top1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">안매운 불닭</h5>
                                        <p class="card-text">저는 매운걸 잘 못먹어서 이렇게 저만의 레시피를 만들었어요!!</p>
                                        <div class="div">
                                            <span class="down float-end">이용자 33</span>
                                            <img src="assets/mark.png" class="mark" id="goodmark" alt="..."
                                                style="width: 70px; height: 50px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

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
            <script src="js/recipe.js"></script>
            <script src="js/time.js"></script>
    </body>

    </html>