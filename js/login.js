function loginform_check() {
    // 변수에 담아주기
    var uid = document.getElementById("userID");
    var pwd = document.getElementById("userPW");

    if (uid.value == "") {
        alert("아이디를 입력하세요.");
        uid.focus();
        return false;
    }

    if (pwd.value == "") {
        alert("비밀번호를 입력하세요.");
        pwd.focus();
        return false;
    }

    document.signup_form.submit();
}


