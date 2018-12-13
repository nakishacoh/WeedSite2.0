
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
      var image = document.getElementById("imageMain");
      var name = document.getElementById("name");
      var type = document.getElementById("type");
      var recommend1 = document.getElementById("recommend1");
      var image1 = document.getElementById("image1");
      var recommend2 = document.getElementById("recommend2");
      var image2 = document.getElementById("image2");
      var recommend3 = document.getElementById("recommend3");
      var image3 = document.getElementById("image3");
      var goodeffects = document.getElementById("goodeffects");
      var badeffects = document.getElementById("badeffects");
      var thc = document.getElementById("thc");
      var cdb = document.getElementById("cdb");



      image.setAttribute("src","images/"+responseObj[0].image);
      name.innerHTML = responseObj[0].name;
      type.innerHTML ="Type: " + responseObj[0].type;
      recommend1.innerHTML =  responseObj[0].res1;
      image1.setAttribute("src","images/"+responseObj[0].img1);
      recommend2.innerHTML =  responseObj[0].res2;
      image2.setAttribute("src","images/"+responseObj[0].img2);
      recommend3.innerHTML = responseObj[0].res3;
      image3.setAttribute("src","images/"+responseObj[0].img3);
      goodeffects.innerHTML ="Good Effects: " + responseObj[0].goodeffects;
      badeffects.innerHTML ="Bad Effects: " + responseObj[0].badeffects;
      thc.innerHTML ="THC: " + responseObj[0].thcprct;
      cdb.innerHTML ="CDB: " + responseObj[0].cdbprct;





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
fRemove();
}

function fRemove(){
  var hideF = document.getElementById("hide");
  hideF.style.display = "none";
  var account = document.getElementById("create");
  account.style.display="block";
}
