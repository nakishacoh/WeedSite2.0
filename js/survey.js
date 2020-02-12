document.getElementById("button").style.display="none";
var currentQ = 1;

//make a button with addEventListener
//make an object that will store the user's previous answers.

var next = document.getElementById("Next");
var prev = document.getElementById("Prev");
var submit = document.getElementById("button");
var account = document.getElementById("create");

next.addEventListener("click",nNext,false);
prev.addEventListener("click",pPrev,false);

var qs = document.getElementsByTagName("div");



 for (var i=0; i<qs.length; i++){
   qs[i].style.display="none";
 }



submit.style.display="none";
account.style.display="none";
   document.getElementById("q"+currentQ).style.display="block";

function nNext(){
  if(currentQ < 6){
    console.log("Next");
    currentQ  = currentQ + 1;
    for (var i=0; i<qs.length; i++){
      qs[i].style.display="none";

    }
    document.getElementById("q"+currentQ).style.display="block";
    if(currentQ == 6){
      document.getElementById("Next").style.display="none";
      document.getElementById("button").style.display="block";
    }
}
  else{

    currentQ = 6;
    next.style.display="none";
    submit.style.display="block";


  }


}
function pPrev(){
if (currentQ >1){
  currentQ = currentQ - 1;
  for (var i=0; i<qs.length; i++){
    qs[i].style.display="none";
  }
  document.getElementById("q"+currentQ).style.display="block";

}
  else {

    currentQ = 1;
  }
}


//answer object
var ansObj = {};

var allQ1Answers = document.querySelectorAll(".Q1");
for(var i=0; i<allQ1Answers.length; i++){
  allQ1Answers[i].addEventListener("click", ansQ1, false);
}

var allQ2Answers = document.querySelectorAll(".Q2");
for(var i=0; i<allQ2Answers.length; i++){
  allQ2Answers[i].addEventListener("click", ansQ2, false);
}

var allQ3Answers = document.querySelectorAll(".Q3");
for(var i=0; i<allQ3Answers.length; i++){
  allQ3Answers[i].addEventListener("click", ansQ3, false);
}

var allQ4Answers = document.querySelectorAll(".Q4");
for(var i=0; i<allQ4Answers.length; i++){
  allQ4Answers[i].addEventListener("click", ansQ4, false);
}

var allQ5Answers = document.querySelectorAll(".Q5");
for(var i=0; i<allQ5Answers.length; i++){
  allQ5Answers[i].addEventListener("click", ansQ5, false);
}

var allQ6Answers = document.querySelectorAll(".Q6");
for(var i=0; i<allQ6Answers.length; i++){
  allQ6Answers[i].addEventListener("click", ansQ6, false);
}

function ansQ1(e){
  ansObj.a1 = e.target.getAttribute("data-value");
  console.log(ansObj);
}
function ansQ2(e){
  ansObj.a2 = e.target.getAttribute("data-value");
  console.log(ansObj);
}
function ansQ3(e){
  ansObj.a3 = e.target.getAttribute("data-value");
  console.log(ansObj);
}
function ansQ4(e){
  ansObj.a4 = e.target.getAttribute("data-value");
  console.log(ansObj);
}
function ansQ5(e){
  ansObj.a5 = e.target.getAttribute("data-value");
  console.log(ansObj);
}
function ansQ6(e){
  ansObj.a6 = e.target.getAttribute("data-value");
  console.log(ansObj);
  // if (ansObj.a1 == "beginner" && ansObj.a2 == "happy" && ansObj.a3 == "edible" && ansObj.a4 == "yes" && ansObj.a5 == "yes" && ansObj.a6 == "yes")
  // {
  //   var strain = "Sativa"
  //   console.log(strain);
  // }
}

// if (ansObj.a1 == "beginner" && ansObj.a2 == "happy" && ansObj.a3 == "edible" && ansObj.a4 == "yes" && ansObj.a5 == "yes" && ansObj.a6 == "yes")
// {
//   var strain = "Sativa"
//   console.log(strain);
// }
