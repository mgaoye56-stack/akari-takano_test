const form = document .getElementById('contactForm');

form.addEventListener('submit', function(event) {

    const nameValue = document .getElementById('name') .value .trim();
    const companyNameValue = document .getElementById('companyName') .value .trim();
    const emailValue = document .getElementById('email') .value .trim();
    const ageValue = document .getElementById('age') .value .trim();
    const messageValue = document .getElementById('message') .value .trim();

if (
    nameValue === '' ||
    companyNameValue === '' ||
    emailValue === '' ||
    ageValue === '' ||
    messageValue === '' 
) {
    event .preventDefault();
    alert('必須項目が未入力です。入力内容をご確認ください。');
    return;
    }
    const confirmMessage = 
    '以下の内容を本当に送信しますか？ \n\n' +
    'お名前:' + nameValue + '\n' +
    '会社名: ' + companyNameValue + '\n' +
    'メールアドレス:' + emailValue + '\n' +
    '年齢:' + ageValue + '\n' +
    'お問い合わせ内容:' + messageValue;

    if(!confirm(confirmMessage)) {
        event .preventDefault();
    }
});

var colors = ['blue', 'red', 'yellow', 'gray'];
var colorIndex = 0;

var footer = document .querySelector('footer');
var changeButton = document .getElementById('changeColorButton');

function changeStyle() {
    footer .style .backgroundColor = colors[colorIndex];

    colorIndex = (colorIndex + 1) % colors .length;
    }
changeButton .addEventListener('click', changeStyle);