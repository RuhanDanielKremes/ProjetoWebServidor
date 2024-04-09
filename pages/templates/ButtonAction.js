document.getElementById("SendLoginInfoBtn").disabled = true;
        
        // Adiciona event listeners para os campos de login e senha
        document.getElementById("loginUsername").addEventListener("input", function(event) {
            validateInputs();
        });
        
        document.getElementById("loginPassword").addEventListener("input", function(event) {
            validateInputs();
        });
        
        function validateInputs() {
            // Busca o conteúdo dos campos de login e senha
            var username = document.getElementById("loginUsername").value;
            var password = document.getElementById("loginPassword").value;
            
            // Valida o conteúdo dos campos de login e senha
            if (username.trim() !== '' && password.trim() !== '') {
                // Habilita o botão se ambos os campos não estiverem vazios
                document.getElementById("SendLoginInfoBtn").disabled = false;
            } else {
                // Desabilita o botão se algum dos campos estiver vazio
                document.getElementById("SendLoginInfoBtn").disabled = true;
            }
        }