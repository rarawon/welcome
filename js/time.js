// 시계
// 현재 날짜와 시간을 가져오는 함수
function getCurrentDateTime() {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, "0");
    const date = String(now.getDate()).padStart(2, "0");
    const day = ["일", "월", "화", "수", "목", "금", "토"][now.getDay()];
    const hour = String(now.getHours()).padStart(2, "0");
    const minute = String(now.getMinutes()).padStart(2, "0");
    const second = String(now.getSeconds()).padStart(2, "0");
    return `${year}-${month}-${date} ${day} ${hour}:${minute}:${second}`;
}

// h1-clock 클래스를 가진 요소를 찾아 현재 날짜와 시간을 출력하는 함수
function updateClock() {
    const clockElement = document.querySelector(".h1-clock");
    clockElement.textContent = getCurrentDateTime();
}

// 1초마다 updateClock 함수를 호출하여 현재 시간을 업데이트
setInterval(updateClock, 1000);