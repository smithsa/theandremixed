       $(function() {
            var number_of_questions_to_ask = 12;
            //when changing the number of slides add the equal amount of divs to the page
            var hostsite = "https://polar-cliffs-2133.herokuapp.com/";
            
            $("#number-of-questions").text(number_of_questions_to_ask);

            $.ajax({
                  method: "GET",
                  url: hostsite+"api/api.php/relationship",
                  dataType: "json",
                  crossDomain : true,
                  success: function(response){
                    var relationships = response['relationship']['records']; 
                    for(var i=0; i < relationships.length; i++){
                        $('#relationship').prepend(new Option(relationships[i][1], relationships[i][0]));
                    }
                  }
            });

             $.ajax({
                      method: "GET",
                      url: hostsite+"api/api.php/relationship_question,question,?filter=relationship_id,eq,"+1,
                      dataType: "json",
                      crossDomain : true,
                      success: function(response){

                            var num_questions = response["question"]["records"].length
                            var unfilted_questions = response["question"]["records"];
                            var list_of_questions = [];
                            var shuffled_array = shuffle(unfilted_questions);
                            console.log(shuffled_array);
                            for(var i = 0; i < number_of_questions_to_ask; i++){
                                list_of_questions.push( [shuffled_array[i][2], shuffled_array[i][1] ]);
                            }

                            list_of_questions.sort(sortFunction);
                           
                            var count = 0; 
                            $("#section3 .question .relationship-question").each(function( ){
                                $(this).append(unescape(list_of_questions[count][1]));
                                count++;
                            });

                      }
                });

            $('#fullpage').fullpage({
                verticalCentered: true,
                sectionsColor: ['#000000', '#8e44ad', '#2980b9', '#E29C45', '#c0392b'],
                anchors: ['home', 'players', 'directions', 'questions', 'credits']
            });

            //loading relationship dropdown
            $("#relationship-next-btn").on("click",  function(){
                $.ajax({
                      method: "GET",
                      url: hostsite+"api/api.php/relationship_question,question,?filter=relationship_id,eq,"+$( "#relationship" ).val(),
                      dataType: "json",
                      crossDomain : true,
                      success: function(response){
                            var num_questions = response["question"]["records"].length
                            var unfilted_questions = response["question"]["records"];
                            var list_of_questions = [];
                            var shuffled_array = shuffle(unfilted_questions);
                            console.log(shuffled_array);
                            for(var i = 0; i < number_of_questions_to_ask; i++){
                                list_of_questions.push( [shuffled_array[i][2], shuffled_array[i][1] ]);
                            }

                            list_of_questions.sort(sortFunction);
                            console.log(list_of_questions);
                            for(var j =0; j < list_of_questions.length; j++){
                                var slider_container = $('<div/>').attr({ class: 'slide fp-slide fp-table'});
                                var fp_container = $('<div/>').attr({ class: 'fp-tableCell'});
                                var card_container = $('<div/>').attr({ class: 'card'});
                                var front_side_of_card = $('<div/>').attr({ class: 'front'}).html('<h1 class="white card-logo">{&#10086;}</h1>');
                                var back_side_of_card = $('<div/>').attr({ class: 'back'}).html('<p>'+ unescape(list_of_questions[1]) +'</p>');
                                card_container.append(front_side_of_card, back_side_of_card);
                                fp_container.append(card_container);
                                slider_container.append(fp_container);
                                $(".fp-slides .fp-slidesContainer").append(slider_container);

                            }

                      }
                });

            });

            $("#section0").bgswitcher({
              images: [ "images/background1.png", 
                        "images/background2.png", 
                        "images/background3.png", 
                        "images/background4.png", 
                        "images/background5.png"
                      ]});

            $.fn.fullpage.setMouseWheelScrolling(false);
            $.fn.fullpage.setAllowScrolling(false);

             $("#start-timer").on("click", function(){
                $(this).css("visibility", "hidden");
                game_countdown(31);
             });
         
            $(".card").flip({axis: 'x'});
           
            $("#play-again").on("click", function(){
                window.location.replace(hostsite+"#players");
            });

            function shuffle(array) {
                  var currentIndex = array.length, temporaryValue, randomIndex;

                  // While there remain elements to shuffle...
                  while (0 !== currentIndex) {

                    // Pick a remaining element...
                    randomIndex = Math.floor(Math.random() * currentIndex);
                    currentIndex -= 1;

                    // And swap it with the current element.
                    temporaryValue = array[currentIndex];
                    array[currentIndex] = array[randomIndex];
                    array[randomIndex] = temporaryValue;
                  }

                  return array;
            }

            function game_countdown(count){
                var count = count;
                var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
                function timer(){
                    count=count-1;
                    if (count <= 0){
                        clearInterval(counter);
                        $("#countdown-instructions").fadeOut(function() {
                                $(this).text("You may now begin the game!");
                                $("#start-timer").fadeOut(function() {
                                    $("#start-timer").css("visibility", "visible");
                                    $("#start-timer").text("Start Game");
                                    $("#start-timer").attr("href", "#questions");
                                    $("#start-timer").attr("id", "#start_game");
                                }).fadeIn(); 
                        }).fadeIn();  
                        var audio = new Audio('sound/ding.mp3');
                        audio.play();
                        for(i=0;i<16;i++) {$("#section2").fadeTo('slow', 0.5).fadeTo('slow', 1.0);}   
                        return;
                    }
                }
            }

            function sortFunction(a, b) {
                if (a[0] === b[0]) {
                    return 0;
                }
                else {
                    return (a[0] < b[0]) ? -1 : 1;
                }
            }

        });
