var day = new Date();
var week = new Array('월','화','수','목','금','토','일');

var month = day.getMonth();
var date = day.getDate();
var today = day.getDay();
var todaylabel = week[today];
