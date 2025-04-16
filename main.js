
document.getElementById('senha').addEventListener('focus', function() {
    document.getElementById('btn-senha').style.display = 'inline'; 
});


document.getElementById('senha').addEventListener('blur', function() {
    
    if (document.getElementById('senha').type === 'text') {
        document.getElementById('btn-senha').style.display = 'none'; 
    }
});


function mostrarSenha() {
    var inputSenha = document.getElementById('senha');
    var btnShowpass = document.getElementById('btn-senha');
    var icon = btnShowpass;  

    if (inputSenha.type === 'password') {
        inputSenha.setAttribute('type', 'text');  
        icon.classList.replace('bi-eye', 'bi-eye-slash');  
    } else {
        inputSenha.setAttribute('type', 'password');  
        icon.classList.replace('bi-eye-slash', 'bi-eye');  
    }
}