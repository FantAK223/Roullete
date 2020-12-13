(function(d){
  var display = d.querySelector('#countdown .display') // меняющаяся цифра
	var timeLeft = parseInt(display.innerHTML) // оставшееся время
  
  var timer = setInterval(function(){
    if (--timeLeft >= 0) { // если таймер всё еще больше нуля
    	display.innerHTML = timeLeft // обновляем цифру
    } else {
    	d.querySelector('#countdown h1').style.display = 'none' // прячем теекст
      d.querySelector('#countdown button').style.display = 'block' // показываем кнопку
      clearInterval(timer) // удаляем таймер
    }
  }, 1000)  // таймер срабатывает каждые 1000 msec (1 sec)
})(document)