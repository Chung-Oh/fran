    <footer class="bg-dark">
        <section class="client">
            <p class="mb-0">&copy 2019 <span class="info-client">Francielly Rodrigues</span> - <span class="info-client">FranBeauty</span></p>
        </section>
        <section class="developer">
            <p class="mb-0">Desenvolvido por Daniel Chung</p>
            <p class="mb-0"><i class="far fa-envelope"></i> danielvchung@hotmail.com</p>
        </section>
    </footer>
    <!-- JS -->
    <script> // Logo Name 'FranBeauty'
        var windowWidth = window.innerWidth;
        var windowHeight = window.innerHeight;
        var screenWidth = screen.width;
        var screenHeight = screen.height;
        console.log('windowWidth = ',windowWidth);
        console.log('windowHeight = ',windowHeight);
        console.log('screenWidth = ',screenWidth);
        console.log('screenHeight = ',screenHeight);

        window.onscroll = function() {
            (windowWidth >= 1200) ? scrollFunction(30, 150) : scrollFunction(30, 52);
        };

        var glow = document.querySelector('.glow');

        function scrollFunction(min, max) {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                glow.style.fontSize = min + 'px';
                lightNameDesktop(false);
            } else {
                glow.style.fontSize = max + 'px';
                lightNameDesktop(true);
            }
        }

        function lightNameDesktop(status) {
            (status) ? glow.classList.add('glow-lg') : glow.classList.remove('glow-lg');
        }
    </script>
    <script> // Line Page Name
        console.log(document.querySelectorAll('.page'));
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>