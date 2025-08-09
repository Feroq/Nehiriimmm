<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Özür Sayfası</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #ffdde1;
        text-align: center;
        padding: 50px;
    }
    #question {
        font-size: 28px;
        margin-bottom: 30px;
        color: #b3005e;
    }
    button {
        font-size: 20px;
        padding: 10px 20px;
        margin: 10px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        background-color: #ff4d79;
        color: white;
        transition: 0.3s;
    }
    button:hover {
        background-color: #ff1a66;
    }
    #final {
        font-size: 30px;
        color: #ff0066;
        font-weight: bold;
    }
</style>
</head>
<body>

<h1>💌 Sana Birkaç Sorum Var 💌</h1>
<div id="question"></div>
<div id="buttons">
    <button onclick="nextQuestion()">Evet</button>
    <button onclick="nextQuestion()">Hayır</button>
</div>
<div id="final" style="display:none;"></div>

<script>
    const questions = [
        "Beni seviyor musun? ❤️",
        "Bana güveniyor musun? 🔒",
        "Beni özledin mi? 😢",
        "Bana kırgın mısın? 💔",
        "Şu an gülüyor musun? 😊",
        "Beni affetmen için bir çiçek yollasam kabul eder misin? 🌹",
        "Sana hep değer vereceğime inanıyor musun? 💎",
        "Şimdi kocaman bir sarılma istiyor musun? 🤗"
    ];

    let index = 0;

    function showQuestion() {
        document.getElementById("question").textContent = questions[index];
    }

    function nextQuestion() {
        index++;
        if (index < questions.length) {
            showQuestion();
        } else {
            document.getElementById("question").style.display = "none";
            document.getElementById("buttons").style.display = "none";
            document.getElementById("final").style.display = "block";
            document.getElementById("final").innerHTML = "Teşekkür ederim… Seni çok seviyorum ❤️ Affet beni...";
        }
    }

    showQuestion();
</script>

</body>
</html>
