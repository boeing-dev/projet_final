let btnFirst = document.getElementById("next");
let btnSecond = document.getElementById("prev");
let blockFirst = document.getElementById("newActivityBlock1");
let blockSecond = document.getElementById("newActivityBlock2");
btnFirst.addEventListener('click', function(){blockFirst.style.display="none"; blockSecond.style.display="block"});
btnSecond.addEventListener('click', function(){blockFirst.style.display="block"; blockSecond.style.display="none"})
