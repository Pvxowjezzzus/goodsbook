const form = document.querySelector('#form');

form.addEventListener('submit', function(e) {
    e.preventDefault()
    let submit = this.querySelector('.submit-btn');
    submit.disabled = true;
    let formData = new FormData(this);
    let xhr = new XMLHttpRequest();
    let url = form.action;
    xhr.open('POST', url, true);
    xhr.send(formData);
    xhr.onload = function() {
        let data = JSON.parse(xhr.responseText);
        if (xhr.readyState === 4) {
            submit.disabled = false;

            if (xhr.status === 400 && data['status'] === 400) {
                alert(data['message']);
            }
        }
    }
});