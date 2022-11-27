const form = document.querySelector('.signUp form'),
    continueBtn = form.querySelector('.button input');

form.onsubmit = e => {
    e.preventDefault(); // prenting form from submitting
}

continueBtn.addEventListener('click', () => {
    // let 's start AJAX
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open('POST', 'php/signup.php', true);
    xhr.onload = () => {

    }
    xhr.send();
})