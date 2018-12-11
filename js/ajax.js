
var addContact = document.getElementById("add");

addContact.addEventListener('submit',addContactF,false);
function addContactF(e)
{
  e.preventDefault();
  var myRequest = new XMLHttpRequest;
  myRequest.onreadystatechange = function(){

    if(myRequest.readyState === 4){
      var responseObj  =JSON.parse(myRequest.responseText);
      console.log(responseObj.strain);//responseObj.strain
    }
  }
  // var button_Q1 = document.getElementById("a1");
  // // var button2_Q1 = document.getElementById("btn2");
  // // var button3_Q1 = document.getElementById("btn3");
  // var button_Q2 = document.getElementById("a2");
  // // var button2_Q2 = document.getElementById("btn5");
  // // var button3_Q2 = document.getElementById("btn6");
  // // var button4_Q2 = document.getElementById("btn7");
  // // var button5_Q2 = document.getElementById("btn8");
  // // var button6_Q2 = document.getElementById("btn9");
  // var button_Q3 = document.getElementById("a3");
  // // var button2_Q3 = document.getElementById("btn11");
  // // var button3_Q3 = document.getElementById("btn12");
  // // var button4_Q3 = document.getElementById("btn13");
  // // var button5_Q3 = document.getElementById("btn14");
  // // var button6_Q3 = document.getElementById("btn15");
  // var button_Q4 = document.getElementById("a4");
  // // var button2_Q4 = document.getElementById("btn17");
  // var button_Q5 = document.getElementById("a5");
  // // var button2_Q5 = document.getElementById("btn19");
  // var button_Q6 = document.getElementById("a6");
  // // var button2_Q6 = document.getElementById("btn21");



  myRequest.open("POST", "survey-processing.php", true); //true means it is asynchronous // Send urls through the url
  myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  myRequest.send('data='+ JSON.stringify(ansObj));

}
