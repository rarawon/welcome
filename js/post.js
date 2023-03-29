// 추천 버튼 클릭 이벤트
document.getElementById("upvote-btn").addEventListener("click", function () {
    alert("추천되었습니다!");
});

// 비추 버튼 클릭 이벤트
document.getElementById("downvote-btn").addEventListener("click", function () {
    alert("비추되었습니다.");
});


// var board = "<?php echo $board; ?>";
// // 삭제 버튼 클릭 이벤트
// document.getElementById("delete").addEventListener("click", function () {
//     // 삭제 여부를 묻는 얼러트 띄우기
//     if (confirm("삭제하시겠습니까?")) {
//         window.location.href = "/board_" + encodeURIComponent("<?php echo $board; ?>") + ".php";
//     }
// });


// 수정 버튼 클릭 이벤트 핸들러 등록
const editBtns = document.querySelectorAll('.edit-btn');
editBtns.forEach(editBtn => {
    editBtn.addEventListener('click', handleEditClick);
});

function handleEditClick() {
    // 현재 댓글 내용 저장
    const postContents = this.closest('.comments').querySelector('.postcomments').textContent.trim();

    // 댓글 내용 태그를 textarea로 변경
    const postContentsEl = this.closest('.comments').querySelector('.postcomments');
    const textareaEl = document.createElement('textarea');
    textareaEl.classList.add('form-control');
    textareaEl.setAttribute('rows', 5);
    textareaEl.textContent = postContents;
    postContentsEl.replaceWith(textareaEl);

    // 수정완료 버튼 생성
    const doneBtn = document.createElement('button');
    doneBtn.textContent = '수정완료';
    doneBtn.classList.add('btn', 'btn-primary');
    doneBtn.addEventListener('click', handleEditDoneClick);
    this.closest('.comments').querySelector('.float-end').prepend(doneBtn);

    // 수정 버튼 삭제
    this.remove();
}

function handleEditDoneClick() {
    // textarea 내용을 가져와서 댓글 내용 태그로 변경
    const textareaEl = this.closest('.comments').querySelector('textarea');
    const postContents = textareaEl.value.trim();
    const postContentsEl = document.createElement('div');
    postContentsEl.classList.add('postcomments');
    postContentsEl.textContent = postContents;
    textareaEl.replaceWith(postContentsEl);

    // 수정 버튼 생성
    const editBtn = document.createElement('button');
    editBtn.textContent = '수정';
    editBtn.classList.add('btn', 'btn-secondary', 'edit-btn');
    editBtn.addEventListener('click', handleEditClick);
    this.closest('.comments').querySelector('.float-end').prepend(editBtn);

    // 수정완료 버튼 삭제
    this.remove();
}


