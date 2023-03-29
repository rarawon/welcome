// 해당 <tr> 태그를 찾아 클릭 이벤트를 등록
document.getElementById("post_row").addEventListener("click", function () {
    // 폼을 찾아 전송
    document.querySelector("form").submit();
});

// document.getElementById("card").addEventListener("click", function () {
//     // 폼을 찾아 전송
//     document.querySelector("#card_form").submit();
// });

// // 해당 <tr> 태그를 찾아 클릭 이벤트를 등록
// document.getElementById("card").addEventListener("click", function () {
//     // 폼을 찾아 전송
//     document.querySelector("form").submit();
// });

// function submitForm() {
//     document.getElementById("myForm").submit();
// }