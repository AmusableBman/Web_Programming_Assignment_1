/*
Name: Brandon Hewlett
Site: Portfolio - Brandon Hewlett
File: javascript.js. All the javascript for the site. 
*/

//Var Assignments for the buttons. Uses getElementById
var button1 = document.getElementById("button1");
var button2 = document.getElementById("button2");
var button3 = document.getElementById("button3");
var button4 = document.getElementById("button4");
var button5 = document.getElementById("button5");


/*
Group of functions that handles the activity of the page.
If a page is active, the button that is associated with that page is
highlighted in yellow. Each function is called in the appropriate HTML page
*/
function homeActive()
{
  button1.setAttribute("style","background-color: yellow;");
}
function aboutMeActive()
{
  button2.setAttribute("style","background-color: yellow;");
}
function projectsActive()
{
  button3.setAttribute("style","background-color: yellow;");
}
function servicesActive()
{
  button4.setAttribute("style","background-color: yellow;");
}
function contactMeActive()
{
  button5.setAttribute("style","background-color: yellow;");
}


/*
Onclick functions. When the appropriate button is clicked, this function
redirects the user to the appropriate page.
*/
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