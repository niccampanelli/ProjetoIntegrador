function signUser(){

    const email = document.getElementById("emailInput").value;
    const password = document.getElementById("passwordInput").value;

    firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((user) => {
            alert('Sucesso no cadastro do usuário');
            console.log('Sucesso no cadastro do usuário');
            window.location = '/login';
    })
        .catch((error) => {
            alert('Erro no cadastro do usuário: ' + error);
            console.error('Erro no cadastro de usuário: ' + error);
    });

}

function logUser(){
  
    const email = document.getElementById("emailInput").value;
    const password = document.getElementById("passwordInput").value;

    firebase.auth().signInWithEmailAndPassword(email, password)
        .then((user) => {
            alert('Sucesso no login do usuário');
            console.log('Sucesso no login do usuário');
            window.location = '/';
    })
        .catch((error) => {
            alert('Erro no login de usuário: ' + error);
            console.error('Erro no login de usuário: ' + error);
    });
}