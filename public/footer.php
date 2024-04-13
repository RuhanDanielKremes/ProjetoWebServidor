   <footer class="section">
        <div class="center grey-text">Lojinha do james</div>
        <div class="center grey-text">© 2020 UwU</div>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script>
        function ajustarPosicaoRodape() {
        var conteudo = document.querySelector('.conteudo');
        var rodape = document.querySelector('footer');
        var alturaJanela = window.innerHeight;
        var alturaConteudo = conteudo.offsetHeight;
        var alturaRodape = rodape.offsetHeight;

        if (alturaJanela >= alturaConteudo + alturaRodape) {
            rodape.style.position = 'fixed';
        } else {
            rodape.style.position = 'relative';
        }
        }

        window.addEventListener('load', ajustarPosicaoRodape);
        window.addEventListener('resize', ajustarPosicaoRodape);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>