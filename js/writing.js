function writingform_check() {
    console.log("실행");

    // 변수에 담아주기
    var title = document.getElementById("제목");
    var intro = document.getElementById("소개");
    var contents = document.getElementById("contents").value;

    var date = new Date(); // 현재 시간
    var year = date.getFullYear(); // 년도
    var month = ("0" + (date.getMonth() + 1)).slice(-2); // 월
    var day = ("0" + date.getDate()).slice(-2); // 일

    var dateString = year + "-" + month + "-" + day; // 형식에 맞게 변환한 날짜

    if (board === "recipe") {
        if (title.value == "") {
            alert("레시피 이름을 입력하세요.");
            title.focus();
            return false;
        }
        if (title.value.length > 10) {
            alert("레시피 이름은 10자 이내로 입력하세요.");
            title.focus();
            return false;
        }
    } else {
        if (title.value == "") {
            alert("제목을 입력하세요.");
            title.focus();
            return false;
        }
        if (title.value.length > 100) {
            alert("제목은 100자 이내로 입력하세요.");
            title.focus();
            return false;
        }
    }


    if (board === "recipe") {
        if (intro.value.length > 50) {
            alert("레시피 소개는 40자 이내로 입력하세요.");
            intro.focus();
            return false;
        }
    }


    if (contents == "") {
        alert("내용을 입력하세요.");
        document.getElementById("contents").focus(); // textarea로 focus 이동
        return false;
    }

    if (contents.length > 500) {
        alert("내용은 500자 이내로 입력하세요.");
        document.getElementById("contents").focus(); // textarea로 focus 이동
        return false;
    }

    // 작성한 시간 문자열 폼에 추가
    var form = document.forms["writingform"];
    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("name", "timestamp");
    hiddenInput.setAttribute("value", dateString);
    form.appendChild(hiddenInput);

    form.submit();
}

