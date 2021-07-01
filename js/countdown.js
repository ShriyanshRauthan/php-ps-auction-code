function setTimer(elem_id, date) {
  // set the date we're counting down to
 var target_date = new Date(date).getTime();
 // variables for time units
 var days, hours, minutes, seconds;
 // get tag element
 
 var countDownElem = document.getElementById(elem_id);
 //update the tag with id "countdown" every 1 second
 setInterval(function () {
    // find the amount of "seconds" between now and target
   var current_date = new Date().getTime();
   var seconds_left = (target_date - current_date) / 1000;
   // do some time calculations
   days = parseInt(seconds_left / 86400);
   seconds_left = seconds_left % 86400;
   hours = parseInt(seconds_left / 3600);
   seconds_left = seconds_left % 3600;
   minutes = parseInt(seconds_left / 60);
   seconds = parseInt(seconds_left % 60);
   // format countdown string + set tag value
   countDownElem.innerHTML = days + " D : " + hours + " H : " + minutes + " M : " + seconds + " S";
 }, 1000);
 }
 setTimer("countdown1","july 15, 2021");
 setTimer("countdown2","july 17, 2021");
 setTimer("countdown3","july 20, 2021");
 setTimer("countdown4","july 25, 2021");