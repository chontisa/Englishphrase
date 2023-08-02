<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>My English Phrase</title>
    <meta charset="utf-8">
    <style>
        #index-btn {
            position: fixed;
            top: 20px;
            right: 0px;
            margin: 0 auto;
            display: block;
            font-size: 1.1rem;
            width: 200px;
            line-height: 2;
            margin-top: 30px;
        }
    </style>
    <style>
        #start-test {
            position: fixed;
            bottom: 150px;
            right: 350px;
            margin: 0 auto;
            display: block;
            font-size: 1.1rem;
            width: 170px;
            line-height: 2;
            margin-top: 30px;
        }
    </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/basic/jquery.qtip.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/basic/jquery.qtip.min.css">
</head>

<body class="container mt-5 bg-lightseagreentseagreen">
    <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">ฝึกอ่านภาษาอังกฤษ</h1>
    <p class="lead mt-4"><strong>Select Voice</strong></p>
    <select id="voices" class="form-select bg-secondary text-dark"></select>
    <div class="d-flex mt-4 text-ligh">
        <div>
            <p class="lead"><strong>Volume</strong></p>
            <input type="range" min="0" max="1" value="1" step="0.1" id="volume">
            <span id="volume-label" class="ms-2">1</span>
        </div>
        <div class="mx-5">
            <p class="lead"><strong>Rate</strong></p>
            <input type="range" min="0.1" max="10" value="1" id="rate" step="0.1">
            <span id="rate-label" class="ms-2">1</span>
        </div>
        <div>
            <p class="lead"><strong>Pitch</strong></p>
            <input type="range" min="0" max="2" value="1" step="0.1" id="pitch">
            <span id="pitch-label" class="ms-2">1</span>
        </div>
    </div>
    <textarea id="phraseTextArea" class="form-control bg-dark text-light mt-5" cols="30" rows="10" placeholder="Type here..."></textarea>
    <div class="mb-5">
        <button id="start" class="btn btn-success mt-5 me-3 start">Start</button>
        <button id="pause" class="btn btn-warning mt-5 me-3">Pause</button>
        <button id="resume" class="btn btn-info mt-5 me-3">Resume</button>
        <button id="cancel" class="btn btn-danger mt-5 me-3">Cancel</button>
    </div>
    <div style="text-align: center;">
        <p id="phrase"></p>
        <p id="result">Right or wrong?</p>
        <p id="diagnostic">...diagnostic messages</p>
        <button id="start-test" class="start-test">Start test</button>
    </div>
</body>

</body>
<button id="index-btn" class="index-btn" onclick="window.location.href='index.html';">English Phrase Matcher</button>
<script src="./script2.js"></script>
<script>
    const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition)();

    recognition.lang = "en-US"; // เปลี่ยนภาษาได้ ถ้าต้องการ

    recognition.onresult = function (event) {
        const speechResult = event.results[0][0].transcript;
        console.log("You said: ", speechResult);

        // Check if the user said "Phrase Matcher"
        if (speechResult.toLowerCase().includes("phrase matcher")) {
            // Navigate to the index.html page
            window.location.href = "index.html";
        }
    };

    // Start listening for the user's speech
    document.getElementById("start").addEventListener("click", function () {
        recognition.start();
    });
</script>
<!-- tooltips -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/basic/jquery.qtip.min.js"></script>
    <?php include('hover.php'); ?>
</html>
