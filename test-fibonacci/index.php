<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Calcular Fibonacci</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="stylesheet" href="./main.css?v=<?php echo uniqid(); ?>">
    </head>

    <body>

        <header>
            <h1> Fibonacci Calculator </h1>
        </header>
        
        <section>
                <div class="form-container">
                    <form id="fibonacciFrm" class="fibonacci-form" name="fibonacci_form" method="POST" action="fibonacci.php">
                        <label>Insira o número</label>
                        <input id="numberInpt" name="number" type="number" min="0" placeholder="Enteiro maior que zero" required="required"/>
                        <button id="calculateBtn" type="button">Calcular</button>
                    </form>                    
                </div>

                <div id="fibonacciResponseDv" class="form-response">
                    <ul id="fibonacciResponseUl"></ul>
                </div>
        </section>

        <footer>
            <div class="footer-container">
                <p>Copyright 2023 - Fibonacci Calculator</p>
            </div>
        </footer>

    </body>

</html>

<script src="./main.js?v=<?php echo uniqid(); ?>"></script>