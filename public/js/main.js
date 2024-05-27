let popupOpen = document.querySelector('#popup-open');
let popup = document.querySelector('#popup');
let close = document.querySelector('#close');
let body = document.querySelector('body');
let popupContainer = document.querySelector('#popup-container');

popupOpen.onclick = ()=>{
    popup.style.display = "block";
    body.className = "pop";
    body.style.backgroundColor = 'transparent';
    popupContainer.classList.add('popup-container');
    
}

close.onclick = ()=>{
    popup.style.display = "none";
    body.style.backgroundColor = 'rgb(228,228,228)';
    popupContainer.classList.remove('popup-container');
}


