<?php
// 게시글 ID를 받아옴
$board = $_GET['board'];
$num = $_GET['num'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $intro = $_POST['intro'];
    $contents = $_POST['contents'];
    $timestamp = $_POST['timestamp'];

    // 이미지 경로를 받아옴
    $imgPath = $_POST['imgPath'];

    // 이미지를 삭제할 경우
    if (isset($_POST['removeImage'])) {
        $imgPath = $_POST['imgPath'];
        unlink($imgPath);
        $imgPath = '';
        // // 데이터베이스에서 이미지 경로 제거
        // $sql = "UPDATE posts SET img_path = NULL WHERE id = $postId";
        // $result = mysqli_query($conn, $sql);
    }

    // // 이미지를 업로드할 경우
    // if (isset($_FILES['imgFile']['name']) && $_FILES['imgFile']['name'] !== '') {
    //     // ...
    // }

    // 글 내용을 업데이트하고 데이터베이스에 저장
    // ...

    if (isset($_FILES['imgFile']) && $_FILES['imgFile']['error'] == UPLOAD_ERR_OK) {
        $imgMyfile = true;
        // 임시 저장된 정보
        $myTempFile = $_FILES['imgFile']['tmp_name'];

        // 파일명을 기존의 파일명을 그대로 쓰고 싶은 경우
        $fileName = $_FILES['imgFile']['name'];
        // 파일 타입 및 확장자 구하기
        $fileTypeExtension = explode('/', $_FILES['imgFile']['type']);

        // 파일 타입
        $fileType = $fileTypeExtension[0];
        // 파일 확장자
        $extention = $fileTypeExtension[1];

        // 확장자 검사
        $isExtGood = false;

        switch ($extention) {
            case 'jpeg':
            case 'bmp':
            case 'gif':
            case 'png':
                $isExtGood = true;
                break;
            default:
                echo '허용하는 확장자는 jpg, bmp, gif, png 입니다. - switch';
                exit();
        }

        // 이미지 파일이 맞는지 확인
        if ($fileType == 'image') {
            // 허용할 확장자를 jpg, bmp, gif, png로 정함, 그 외는 업로드 불가
            if ($isExtGood) {
                // 임시 파일 옮길 폴더 및 파일명
                $myFile = "./instant/{$_FILES['imgFile']['name']}";
                // 임시 저장된 파일을 우리가 저장할 장소 및 파일명으로 옮김
                $imageUpload = move_uploaded_file($myTempFile, $myFile);

                // 업로드 성공 여부 확인
                if ($imageUpload == true) {
                    // echo '파일이 정상적으로 업로드 되었습니다. <br>';
                    // echo "<img src='{$myFile}' width='200' />";
                }
            }
            // 확장자가 jpg, bmp, gif, png가 아닐때
            else {
                echo '허용하는 확장자는 jpg, bmp, gif, png 입니다. - else';
                exit();
            }
        }
        // type이 image가 아닐때
        else {
            echo '이미지 파일이 아닙니다.';
            exit();
        }
    }
}
?>

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
                    <!-- 본문 -->
                    <h3 class="mb-3 text-center bold">
                        <strong><?php echo $title; ?></strong>
                    </h3>

                    <hr>

                    <div class="info">
                        <dl>
                            <dt>번호</dt>
                            <dd><?php echo $num; ?></dd>
                        </dl>
                        <dl>
                            <dt>글쓴이</dt>
                            <dd>테스트</dd>
                        </dl>
                        <dl>
                            <dt>작성일</dt>
                            <dd><?php echo $timestamp; ?></dd>
                        </dl>
                        <dl>
                            <dt>조회</dt>
                            <dd>0</dd>
                        </dl>
                        <dl>
                            <dt><?php switch ($board) {
                                case 'all':
                                    echo '전체';
                                    break;
                                case 'free':
                                    echo '자유';
                                    break;
                                case 'notice':
                                    echo '공지사항';
                                    break;
                                case 'popular':
                                    echo '인기';
                                    break;
                                case 'qna':
                                    echo '질문';
                                    break;
                                case 'works':
                                    echo '작품';
                                    break;
                                case 'recipe':
                                    echo '레시피';
                                    break;
                                default:
                                    echo 'Unknown';
                                    break;
                            } ?></dt>
                        </dl>
                    </div>

                    <hr>

                    <?php if ($board === 'recipe'): ?>
                    <div class="intorcontents">
                        <?php echo $intro; ?>
                    </div>
                    <?php endif; ?>

                    <div class="postcontents">
                        <?php echo nl2br($contents); ?>
                        <!--  이미지가 전송된 경우에만 출력 -->
                        <?php if (!empty($imgPath) && file_exists($imgPath)) {
                            echo "<div style='text-align: center;'><img src='{$imgPath}' width='400' height='300'/></div>";
                        } ?>
                        <?php if (isset($myFile)): ?>
                        <div style='text-align: center;'><img src='<?php echo $myFile; ?>' width='400' height='300' />
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-md-1 mb-3">
                            <button type="btn btn-success btn-block" class="btn btn-secondary"
                                onclick="location.href='board_<?php echo $board; ?>.php';">목록</button>
                        </div>
                        <div class="col-md-2">
                            <div class="d-grid gap-2 d-md-block">
                                <form method="post"
                                    action="board_edit.php?board=<?php echo $board; ?>&num=<?php echo $num; ?>"
                                    name="edit-form">
                                    <!-- 이미지 파일을 업로드하고 임시로 저장한 경로 -->
                                    <input type="hidden" name="imgPath" value="<?php echo $imgPath; ?>">
                                    <?php if (isset($myFile)): ?>
                                    <input type="hidden" name="imgPath" value="<?php echo $myFile; ?>">
                                    <?php endif; ?>
                                    <!-- 제목, 내용 등 다른 데이터도 함께 전송할 수 있음 -->
                                    <input type="hidden" name="title" value="<?php echo $title; ?>">
                                    <input type="hidden" name="intro" value="<?php echo $intro; ?>">
                                    <input type="hidden" name="contents" value="<?php echo $contents; ?>">
                                    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
                                </form>
                                <button class="btn btn-secondary" type="button"
                                    onclick="document.forms['edit-form'].submit();">수정</button>

                                <?php echo "<script> var board = '$board'; </script>"; ?>
                                <button class="btn btn-secondary" type="button" onclick="confirmDelete()">삭제</button>
                                <script>
                                function confirmDelete() {
                                    var board = "<?php echo $board; ?>"; // PHP 변수 값을 JavaScript 변수에 할당합니다.
                                    if (confirm("게시글을 삭제하시겠습니까?")) { // 확인 버튼을 누르면 페이지 이동합니다.
                                        window.location.href = "/board_" + board + ".php";
                                    } else { // 취소 버튼을 누르면 아무 동작도 하지 않습니다.
                                        return false;
                                    }
                                }
                                </script>
                            </div>
                        </div>
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-4">
                            <div class="d-grid gap-2 d-md-block float-end">
                                <button class="btn btn-success" type="success" id="upvote-btn">👍 추천 0개</button>
                                <button class="btn btn-danger" type="button" id="downvote-btn">👎 비추 0개</button>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- 댓글 -->

                    <div class="row">
                        <div class="col-md-10 comments">
                            <div class="postcomments">
                                댓글 UI 입니다.
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="info">
                                        <dl>
                                            <dd>유저1</dd>
                                        </dl>
                                        <dl>
                                            <dd>2023-03-29 10:20:22</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-grid gap-2 d-md-block float-end">
                                        <button class="btn btn-secondary edit-btn" type="button">수정</button>
                                        <button class="btn btn-secondary" type="button" id="delete">삭제</button>
                                        <button class="btn btn-warning" type="button" id="warning">답글</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 "></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2  "></div>

                        <div class="col-md-10 comments">
                            <div class="postcomments">
                                대댓글 UI 입니다.
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="info">
                                        <dl>
                                            <dd>유저2</dd>
                                        </dl>
                                        <dl>
                                            <dd>2023-03-29 13:20:11</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-grid gap-2 d-md-block float-end">
                                        <button class="btn btn-secondary edit-btn" type="button">수정</button>
                                        <button class="btn btn-secondary" type="button" id="delete">삭제</button>
                                        <button class="btn btn-warning" type="button" id="warning">답글</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="writingcomment">
                        <textarea name="comment" id="comment" rows="10" placeholder="댓글을 입력하세요"></textarea>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <div class="d-grid gap-2 d-md-block float-end">
                                    <button class="btn btn-warning" style="width: 100px;" type="button"
                                        id="leave">등록</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- 오른쪽 공백 -->
            <div class="col-md-1 col-sm-1"></div>
        </div>
    </div>

    <!-- Core theme JS-->
    <script src="js/writing.js"></script>
    <script src="js/post.js"></script>
</body>

</html>