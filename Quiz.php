<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/quiz.css">
    <script
        src="https://kit.fontawesome.com/7f6ab6587f.js"
        crossorigin="anonymous"
    ></script>
    <title>Document</title>
</head>
<body>
    <?php include 'Header.html'; ?>
    
        
        <div class="container" >
        <div class="quiz">
            <h1>FIND THE PERFECT PROGRAM FOR YOUR GOALS</h1>
            <div class="text">
            Take this free quiz to get matched with the right program based on your goals and experience. Less than 10 questions and no sign-up required!
            </div>
            <button class="start-btn">START QUIZ</button>
        </div>
            <div class="question">Question</div> 
            <div id="result" style="display:none;"></div>
            <div class="controls">
                <button class="back">Next</button>
            </div>
        </div>




    <?php include 'Footer.html'; ?>
    <script src="JS/quiz.js"></script>
    <script src="JS/app.js"></script>
    
</body>
</html>