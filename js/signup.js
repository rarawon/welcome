function signupform_check() {
    // 변수에 담아주기
    var uid = document.getElementById("userID");
    var pwd = document.getElementById("userPW");
    var repwd = document.getElementById("checkPW");
    var certify_num = document.getElementById("certify_num");
    var uname = document.getElementById("nickname");
    var email_id = document.getElementById("email");

    if (uid.value == "") {
        alert("아이디를 입력하세요.");
        uid.focus();
        return false;
    }

    if (email_id.value == "") {
        alert("이메일 주소를 입력하세요.");
        email_id.focus();
        return false;
    }

    if (certify_num.value == "") {
        alert("인증번호을 입력하세요.");
        certify_num.focus();
        return false;
    }

    // 비밀번호 영문자+숫자+특수조합(8~25자리 입력) 정규식
    var pwdCheck = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;

    if (pwd.value == "") {
        alert("비밀번호를 입력하세요.");
        pwd.focus();
        return false;
    }

    if (!pwdCheck.test(pwd.value)) {
        alert("비밀번호는 영문자+숫자+특수문자 조합으로 8~25자리 사용해야 합니다.");
        pwd.focus();
        return false;
    }

    console.log("뭐야?")

    if (repwd.value !== pwd.value) {
        alert("비밀번호가 일치하지 않습니다.");
        repwd.focus();
        return false;
    }

    if (uname.value == "") {
        alert("닉네임을 입력하세요.");
        uname.focus();
        return false;
    }

    document.signup_form.submit();
}

// //아이디 중복체크 팝업창(현재 공백문서)
// function id_check() {
//   //window.open("팝업될 문서 경로", "팝업될 문서 이름", "옵션");
//   window.open("", "", "width=600, height=200, left=200, top=100");
// }




