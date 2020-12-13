 
 $(document).ready(function () {
            for (i = 0; i < 3; i++) {
                $(".list li").clone().appendTo(".list");
            }
            var a, b, bet;
            
            
                 function START ()  {
                                    $('.window').css({
                    right: "0"
                    
                })
                $('.list li').css({
                    border: '4 px solid'
                })
                function selfRandom(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }
                var x = selfRandom(50, 100);
                $('.list li:eq('+x+')').css({
                  border: '4px solid green',
                  width: '128px',
                  height: '128px'
                });
                a = $('.list li:eq('+x+')').attr('id');
                    if (b == a) {
                        if (b == "green") {
                            bet *= 14;
                            document.getElementById('balancee').value = Number(document.getElementById('balancee').value) + bet;
                            $.ajax({
                                url: 'updateBalance2.php',
                                data: $(this).serialize()
                            }).done(

                            ).fail(

                            );
                        }
                        else {
                            bet *= 2;
                            document.getElementById('balancee').value = Number(document.getElementById('balancee').value) + bet;
                            $.ajax({
                                url: 'updateBalance1.php',
                                data: $(this).serialize()
                            }).done(
                               
                            ).fail(
                            );
                        }
                    } 
                $('.window').animate({
                    right: ((x*128)+(x*8-12)-119)
                }, 10000);
                
                 }
 
                 let timer; // пока пустая переменная
                 let x =10; // стартовое значение обратного отсчета
                  // вызов функции
                 function countdown(){  // функция обратного отсчета
                     document.getElementById('rocket').innerHTML = x;
                     --x; // уменьшаем число на единицу
                     if (document.getElementById('rocket').innerHTML == 0){
                         clearTimeout(timer); // таймер остановится на нуле
                         
                     }
                     if (x===0){
                      $('.list li:eq('+x+')').css({
                                              
                        border: '4px solid transparent'
                      });
                       document.getElementById('rocket').innerHTML = x='10';
                       START();
                      
                       
                     }
                     else {
                         timer = setTimeout(countdown, 1000);
                     }
                 }
                 $('#times').click(function(){
                   countdown();
                 });

                 $('#betBlack').click(function(){
                   countdown();
                 });

                 $('#betRed').click(function(){
                   countdown();
                 });

                 $('#betGreen').click(function(){
                   countdown();
                 });

                 $('#formBet').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'countBalance.php',
                        data: $(this).serialize()
                    }).done(

                    ).fail(

                    );
                    let n1 = Number(document.getElementById('balancee').value);
                    bet = Number(document.getElementById('amount').value);
                     let n3 = n1 - bet;
                    document.getElementById('balancee').value = n3;
                 });
                 $('#betBlack').click(function(){
                     b = "black";
                 });
                 $('#betRed').click(function(){
                    b = "red";
                });
                $('#betGreen').click(function(){
                   b = "green";
                });


        });









