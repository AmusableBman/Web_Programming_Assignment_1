function homeActive()
{
  var pageInUse = document.getElementById("button1");
  pageInUse.setAttribute("style","width: 500px; background-color: yellow;");
}

function aboutMeActive()
{
  var pageInUse = document.getElementById("button2");
  pageInUse.setAttribute("style","width: 500px; background-color: yellow;");
}

function projectsActive()
{
  var pageInUse = document.getElementById("button3");
  pageInUse.setAttribute("style","width: 500px; background-color: yellow;");
}

function servicesActive()
{
  var pageInUse = document.getElementById("button4");
  pageInUse.setAttribute("style","width: 500px; background-color: yellow;");
}

function contactMeActive()
{
  var pageInUse = document.getElementById("button5");
  pageInUse.setAttribute("style","width: 500px; background-color: yellow;");
}

button1.onclick=function(){
  window.location.assign("index.html");
}

button2.onclick=function(){
  window.location.assign("aboutme.html");
}

button3.onclick=function(){
  window.location.assign("projects.html");
}

button4.onclick=function(){
  window.location.assign("services.html");
}

button5.onclick=function(){
  window.location.assign("contactme.html");
}

button6.onclick=function(){
  window.location.assign("https://github.com/AmusableBman/Web_Programming_Assignment_1");
}


