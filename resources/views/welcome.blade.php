@include('App')

<div class="d-flex flex-column justify-content-center align-items-center container mt-5">
    <div>
        <h1 id="welcome-message"></h1>
    </div>

    <button class="btn btn-primary">
        <a href="login" class="nav-link ">Login</a>
    </button>
    <button class="btn btn-primary">
        <a class="nav-link " href="register">Registrazione</a>
    </button>
</div>    <!-- Altri elementi nella pagina -->

    <script>
        // Funzione per simulare l'effetto di macchina da scrivere
        function typeWriterEffect(text, element, delay) {
            var i = 0;
            function addChar() {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                    setTimeout(addChar, delay);
                }
            }
            addChar();
        }

        // Invoca l'effetto di macchina da scrivere quando la pagina è pronta
        window.onload = function() {
            var welcomeMessage = document.getElementById('welcome-message');
            typeWriterEffect('Benvenuti in DQA', welcomeMessage, 100);
        };
    </script>


