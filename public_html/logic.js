 var index=1;
              function plusIndex(n){
                  index=index+1;
                  showImage(index);
                  
              };
showImage(1);
function showImage(n){
    var i;
    var x=document.getElementsByClassName("jo");
    if(n>x.length){
        index=1
    };
     if(n<1){
        index=x.length
    };
    for(i=0;i<x.length;i++){
        x[i].style.display="none";
    }
    x[index-1].style.display="block";
}
document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});


document.getElementById('id01').addEventListener("click", function() {
	document.querySelector('.bg-model').style.display = "flex";
});

document.querySelector('.clase').addEventListener("click", function() {
	document.querySelector('.bg-model').style.display = "none";
});
document.getElementById('doc').addEventListener("click", function() {
  document.querySelector('.doctorlogin').style.display = "flex";
});

document.querySelector('.docclose').addEventListener("click", function() {
  document.querySelector('.doctorlogin').style.display = "none";
});
document.getElementById('patient').addEventListener("click", function() {
  document.querySelector('.patientlogin').style.display = "flex";
});

document.querySelector('.patclose').addEventListener("click", function() {
  document.querySelector('.patientlogin').style.display = "none";
});
document.getElementById('patient1').addEventListener("click", function() {
  document.querySelector('.patientsign').style.display = "flex";
});

document.querySelector('.paticlose').addEventListener("click", function() {
  document.querySelector('.patientsign').style.display = "none";
});
document.getElementById('doc1').addEventListener("click", function() {
  document.querySelector('.docsign').style.display = "flex";
});

document.querySelector('.doctclose').addEventListener("click", function() {
  document.querySelector('.docsign').style.display = "none";
});