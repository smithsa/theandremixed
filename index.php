<?php 
header('Content-type: text/html');
header('Access-Control-Allow-Origin: *');  
?> 
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>The And Remixed</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
       
        <script src="js/jquery-2.1.4.min"></script>
        <script src="js/jquery.bgswitcher.js"></script>
        <script src="js/jquery.flip.min.js"></script>
        <script src="js/jquery.fullPage.min.js"></script>
        <script src="js/jquery.bgswitcher.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="fullpage">
            <div class="section" id="section0">
                <h1 id="intro-header">{&#10086;}</h1>
                <h2 id="intro-subheader" >Raw. Honest. Conversation</h2><br/><br/>
                <a href="#players" data-menuanchor="players" class="action-link">Play Game</a>
            </div>
            <div class="section" id="section1">
                 <h2 class="white">Tell us who is playing?</h2>
                 <select class="form-control" name="relationship" id="relationship"></select><br/><br/>
                 <a id="relationship-next-btn" href="#directions" data-menuanchor="directions" class="action-link">Next</a>
            </div>
            <div class="section" id="section2">
                   <div class="slide"> <h2 class="white game-directions">Game Directions</h2></div>
                   <div class="slide"> <p class="white game-direction">Sit facing one another with a foot of distance seperating you.</p></div>
                   <div class="slide"><p class="white game-direction">Person 1 begins by asking.<br/>Person 2 answers.</p></div>
                   <div class="slide"> <p class="white game-direction">Continue back and forth <br/>through all <span id="number-of-questions"></span> questions.</p></div>
                   <div class="slide"> <p class="white game-direction">Every question must be asked but you do not have to answer them. To earn the right to remain silent you must look the other person in the eye for 10 seconds before saying "pass."</p></div>
                   <div class="slide"> <p class="white game-direction"  id="countdown-slide">
                        <span id="countdown-instructions">Take 30 seconds to relax and look at one another. Begin after the bell rings.</span><br/><br/>
                        <a href="javascript:void(0)" id="start-timer" class="action-link">Start Timer</a>
                    </p></div>
                
            </div>
            <div class="section" id="section3">
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>   
                </div> <!-- 1 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 2 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 3 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 4 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 5 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 6 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 7 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 8 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 9 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 10 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 11 -->
                <div class="slide question">
                    <div class="card">
                        <div class="front">
                            <h1 class="white card-logo">{&#10086;}</h1>
                        </div>
                        <div class="back">
                            <p class="relationship-question"></p>
                        </div>
                    </div>  
                </div> <!-- 12 -->
                <div class="slide">
                    <h2 class="white game-over">Game Over <br/>
                        <a href="#lastpage" data-menuanchor="lastpage" class="action-link">Credits</a> 
                        <a href="javascript:void()" id="play-again" class="action-link">Play Again</a>
                    </h2>    
                </div>   
            </div>
            <div class="section" id="section4">
                <h2 class="white">Credits</h2>
                <p class="white">This game was inspired by the creators<br> of the interactive documentary, "The { } And".<br/>Visit the 
                    <a href="http://theand.us/" class="credit-link">theand.us</a> for more information.</p>
            </div>    
        </div>

    


        <script src="js/main.js"></script>
    </body>
</html>
