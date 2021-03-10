function signUser(){

    const errormsg = document.getElementById("errormsg");
    const email = document.getElementById("emailInput").value;
    const password = document.getElementById("passwordInput").value;

    errormsg.innerText = "";
    
    firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((user) => {
            alert('Sucesso no cadastro do usuário');
            console.log('Sucesso no cadastro do usuário');
            window.location = '/login';
    })
        .catch((error) => {
            switch (error.code) {
                case "auth/invalid-email":
                        errormsg.innerText = "Confira se o email está escrito corretamente."
                    break;

                case "auth/email-already-in-use":
                        errormsg.innerText = "Já existe uma conta com o email digitado."
                    break;
                    
                case "auth/operation-not-allowed":
                        errormsg.innerText = "Erro ao se cadastrar. Tente novamente."
                    break;

                case "auth/weak-password":
                        errormsg.innerText = "A senha precisa conter 6 caracteres."
                    break;
                default:
                    break;
            }
            console.error('Erro no cadastro de usuário: ' + error);
    });

}

function logUser(){
  
    const errormsg = document.getElementById("errormsg");
    const email = document.getElementById("emailInput").value;
    const password = document.getElementById("passwordInput").value;

    errormsg.innerText = "";
    
    firebase.auth().signInWithEmailAndPassword(email, password)
        .then((user) => {
            alert('Sucesso no login do usuário');
            console.log('Sucesso no login do usuário');
            window.location = '/';
    })
        .catch((error) => {
            switch (error.code) {
                case "auth/invalid-email":
                        errormsg.innerText = "Confira se o email está escrito corretamente."
                    break;
            
                case "auth/user-disabled":
                        errormsg.innerText = "Parece que esta conta está desativada."
                    break;
                    
                case "auth/user-not-found":
                        errormsg.innerText = "Não existe um usuário com este email."
                    break;

                case "auth/wrong-password":
                        errormsg.innerText = "Verifique se a senha está correta."
                    break;
                default:
                    break;
            }
            console.error('Erro no login de usuário: ' + error);
    });
}