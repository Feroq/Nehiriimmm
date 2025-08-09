<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sana Özür Borçluyum...</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background: url('ARKA_PLAN_FOTO_URL') no-repeat center center/cover;
        font-family: 'Segoe UI', sans-serif;
        color: white;
        text-align: center;
        overflow-x: hidden;
    }
    .overlay {
        background: rgba(0, 0, 0, 0.5);
        padding: 30px;
        min-height: 100vh;
    }
    h1 {
        font-size: 2.4em;
        margin-top: 50px;
    }
    p {
        font-size: 1.3em;
        max-width: 650px;
        margin: 20px auto;
        line-height: 1.6;
    }
    button {
        padding: 12px 24px;
        font-size: 1.2em;
        color: white;
        background: #ff4f81;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background: #ff1e5c;
    }
    .heart {
        position: absolute;
        width: 20px;
        height: 20px;
        background: red;
        transform: rotate(45deg);
        animation: float 5s infinite ease-in-out;
    }
    .heart::before, .heart::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: red;
        border-radius: 50%;
    }
    .heart::before { top: -10px; left: 0; }
    .heart::after { left: -10px; top: 0; }
    @keyframes float {
        0% { transform: translateY(0) rotate(45deg); opacity: 1; }
        100% { transform: translateY(-800px) rotate(45deg); opacity: 0; }
    }
    .love-message {
        display: none;
        font-size: 2em;
        margin-top: 30px;
        color: #ffccf9;
        font-weight: bold;
        text-shadow: 0 0 10px pink;
    }
</style>
</head>
<body>

<div class="overlay">
    <h1>❤️ Özür Dilerim ❤️</h1>
    <p>Biliyorum seni kırdım... Bu satırları yazarken bile kalbim sıkışıyor.  
    Sen benim en değerli parçam, en güzel yanım, en huzurlu yerimsin.  
    Hatalarım için affet beni... Seni her şeyden çok seviyorum. 💕</p>

    <h2>Beni affettin mi?</h2>
    <button onclick="showLove()">💖 Affettim 💖</button>

    <div id="loveMsg" class="love-message">💖 Seni Seviyorum 💖</div>
</div>

<audio autoplay loop>
  <source src="https://cdn.pixabay.com/download/audio/2022/03/22/audio_5b07dcdd59.mp3?filename=romantic-piano-111444.mp3" type="audio/mpeg">
</audio>

<script>
function createHeart(){
    const heart = document.createElement('div');
    heart.className = 'heart';
    heart.style.left = Math.random() * 100 + 'vw';
    heart.style.animationDuration = (2 + Math.random() * 3) + 's';
    document.body.appendChild(heart);
    setTimeout(() => heart.remove(), 5000);
}
setInterval(createHeart, 300);

function showLove(){
    document.getElementById("loveMsg").style.display = "block";
}
</script>

</body>
</html>