const form = document.querySelector('.typing-area'),
    inputField = form.querySelector('.input-field'),
    sendBtn = form.querySelector('button'),
    chatBox = document.querySelector('.chat-box');

form.onsubmit = (e) => {
    e.preventDefault(); // prenting form from submitting
}

sendBtn.addEventListener('click', () => {
    // let 's start AJAX
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open('POST', 'php/insert-chat.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                inputField.value = ''; // once message inserted into database then leave blank the input field
                scrollToBottom();
            }
        }
    }

    // we have to send the form data through ajax to php
    let formData = new FormData(form); // creating new form data object 
    xhr.send(formData); // sending the form data to php
})

chatBox.addEventListener('mouseenter', () => {
    chatBox.classList.add('active');
})

chatBox.addEventListener('mouseleave', () => {
    chatBox.classList.remove('active');
})

setInterval(() => {
    // let 's start AJAX
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open('POST', 'php/get-chat.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                if (!chatBox.classList.contains('active')) { // if active class not contains the scroll to bottom
                    scrollToBottom();
                }
            }
        }
    }
    // we have to send the form data through ajax to php
    let formData = new FormData(form); // creating new form data object 
    xhr.send(formData); // sending the form data to php
}, 500) // this function will run frequently after 500ms


const scrollToBottom = () => {
    chatBox.scrollTop = chatBox.scrollHeight;
}