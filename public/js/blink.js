let eltBlock = document.getElementById("state");
let timeBlinking;

function blinkgreen() {    
    if (eltBlock.style.color=='black') {
        eltBlock.style.color= 'green';
    } else {
        eltBlock.style.color='black';
    }
}

function blinkred() {    
    if (eltBlock.style.color=='black') {
        eltBlock.style.color= 'red';
    } else {
        eltBlock.style.color='black';
    }
}

if (document.getElementById("state").classList.contains("jsgreen")) {
    console.log('ok1');
    timeBlinking = setInterval(blinkgreen, 500);
} else {
    console.log('ok2');
    timeBlinking = setInterval(blinkred, 500);
}

