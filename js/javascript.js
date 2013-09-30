var button1 = document.getElementById("button1");
var button2 = document.getElementById("button2");
var button3 = document.getElementById("button3");
var button4 = document.getElementById("button4");
var button5 = document.getElementById("button5");

function homeActive()
{
  var pageInUse = document.getElementById("button1");
  pageInUse.setAttribute("style","background-color: yellow;");
}

function aboutMeActive()
{
  var pageInUse = document.getElementById("button2");
  pageInUse.setAttribute("style","background-color: yellow;");
}

function projectsActive()
{
  var pageInUse = document.getElementById("button3");
  pageInUse.setAttribute("style","background-color: yellow;");
}

function servicesActive()
{
  var pageInUse = document.getElementById("button4");
  pageInUse.setAttribute("style","background-color: yellow;");
}

function contactMeActive()
{
  var pageInUse = document.getElementById("button5");
  pageInUse.setAttribute("style","background-color: yellow;");
}

button1.onclick=function(){
  window.location.assign("index.php");
}

button2.onclick=function(){
  window.location.assign("aboutme.php");
}

button3.onclick=function(){
  window.location.assign("projects.php");
}

button4.onclick=function(){
  window.location.assign("services.php");
}

button5.onclick=function(){
  window.location.assign("contactme.php");
}

button6.onclick=function(){
  window.location.assign("https://github.com/AmusableBman/Web_Programming_Assignment_1");
}
