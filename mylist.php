<table class="table  table-dark  table-hover">
    <thead>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>날짜</th>
            <th>추천</th>
            <th>조회수</th>
        </tr>
    </thead>

    <tbody>
        <?php if ($title): ?>
        <form method="post" action="board_post.php?board=<?php echo $write_url; ?>&num=10">
            <!-- 이미지 파일을 업로드하고 임시로 저장한 경로 -->
            <input type="hidden" name="imgPath" value="<?php echo $myFile; ?>">
            <!-- 제목, 내용 등 다른 데이터도 함께 전송할 수 있음 -->
            <input type="hidden" name="title" value="<?php echo $title; ?>">
            <input type="hidden" name="contents" value="<?php echo $contents; ?>">
            <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
        </form>
        <tr class="cursor" id="post_row">
            <td>10</td>
            <td class="title"><?php echo $title; ?></td>
            <td>테스트</td>
            <td><?php echo $timestamp; ?></td>
            <td>0</td>
            <td>0</td>
        </tr>
        <?php endif; ?>

        <tr class="cursor" onClick="location.href='#'">
            <td>9</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
        <tr class="cursor" onClick="location.href='#'">
            <td>8</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
        <tr class="cursor" onClick="location.href='#'">
            <td>7</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
        <tr class="cursor" onClick="location.href='#'">
            <td>6</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
        <tr class="cursor" onClick="location.href='#'">
            <td>5</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
        <tr class="cursor" onClick="location.href='#'">
            <td>4</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
        <tr class="cursor" onClick="location.href='#'">
            <td>3</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
        <tr class="cursor" onClick="location.href='#'">
            <td>2</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
        <tr class="cursor" onClick="location.href='#'">
            <td>1</td>
            <td class="title">게시글 UI 구성 제목</td>
            <td>유저123</td>
            <td>2023-03-25</td>
            <td>2</td>
            <td>23</td>
        </tr>
    </tbody>
</table>

<hr>