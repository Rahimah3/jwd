var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $inputFields = document.querySelectorAll('.input-field');
// mengubah tampilan html

var $email = document.getElementById('email');
var $password = document.getElementById('password');
// mengambil data

function addError(message) {
    $error.innerHTML = message;
    $error.style.display = 'block';
}

function removeError() {
    $error.innerHTML = '';
    $error.style.display = 'hidden';
}

function validate(event) {
    //event.PreventDefaul() untuk tidak menjalankan fungsi form apabila disubmit, yaitu mengirim data ke 'action';
    event.preventDefault();
    $error.style.display = 'none';

    if ($email.value != 'admin' || $password.value != 'password') {
        addError('Email atau Password Salah!');
    } else {
        removeError();
        alert('Anda berhasil login');
    }
}

$form.addEventListener('submit', validate);