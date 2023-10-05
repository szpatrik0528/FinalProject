<?php
require_once 'menu.php';
require_once 'head.php';
?>
<div class="container">
    <header>
        <h1>Kosár</h1>
    </header>
    
    <main>
        <ul id="cart-list">
        </ul>
        </main>
        <button id="payment-button">Fizetés</button>
        <li id="cart-total"></li>

        

        
        <footer>
            <p>&copy; 2023 My Webshop</p>
        </footer>

    <script src="main.js">
        
    </script>
    <style>
        #cart-total-container {
            text-align: right;
            font-weight: bold;
            margin-top: 10px;
        }
        
        #cart-total {
            padding: 5px;
        }
    </style>