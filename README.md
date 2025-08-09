<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Özür Sayfam</title>
<style>
    body {
        background-color: #ffe6eb;
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 20px;
    }
    .question {
        font-size: 24px;
        margin: 30px 0;
    }
    button {
        padding: 10px 20px;
        font-size: 18px;
        margin: 10px;
        cursor: pointer;
        border: none;
        border-radius: 10px;
        background-color: #ff4d6d;
        color: white;
    }
    button:hover {
        background-color: #e63950;
    }
    .final {
        font-size: 28px;
        color: #ff1a4d;
        font-weight: bold;
        margin-top: 40px;
    }
    iframe {
        width: 100%;
        height: 400px;
        margin-top: 20px;
        border-radius: 10px;
    }
</style>
</head>
<body>

<h1>💌 Sevgilim İçin 💌</h1>
<div id="content">
    <div class="question" id="question"></div>
    <div id="buttons">
        <button onclick="answer('Evet')">Evet</button>
        <button onclick="answer('Hayır')">Hayır</button>
    </div>
</div>

<script>
    const questions = [
        "Beni seviyor musun? 💖",
        "Bana güveniyor musun? 🤞",
        "Sana değer verdiğimi biliyor musun? 🌹",
        "Birlikte mutlu musun? 😊",
        "Hatalarımı affedebilir misin? 🙏",
        "Gelecekte yanımda olur musun? 💍",
        "Beni özlüyor musun? 💌",
        "Bana bir şans daha verir misin? 🥺",
        "Hayatında iyi ki dediğin biri miyim? 🌟"
    ];

    let currentQuestion = 0;
    const botToken = "8232519691:AAG-zAmBBWw86pUGq-ryNvxlCTMSczVP_mU";
    const chatId = "8494445812";

    function sendToTelegram(message) {
        fetch(`https://api.telegram.org/bot${botToken}/sendMessage`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ chat_id: chatId, text: message })
        });
    }

    function showQuestion() {
        if (currentQuestion < questions.length) {
            document.getElementById("question").innerText = questions[currentQuestion];
        } else {
            showFinal();
        }
    }

    function answer(ans) {
        sendToTelegram(`Soru: ${questions[currentQuestion]} - Cevap: ${ans}`);
        currentQuestion++;
        showQuestion();
    }

    function showFinal() {
        document.getElementById("content").innerHTML = `
            <div class="final">"Sana olan sevgim gökyüzündeki yıldızlar kadar sonsuz..."<br>💖 Affet beni sevgilim 🫠</div>
            <iframe src="https://www.youtube.com/embed/IGrGwBThky0?autoplay=1" allow="autoplay"></iframe>
        `;
        sendToTelegram("Tüm sorular bitti 💌");
    }

    showQuestion();
</script>

</body>
</html>
