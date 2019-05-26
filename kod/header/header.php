    <header id="head">
       <div id="flex">
            <?php include '../burger_menu/burger.php';?>
           <a href="../body/home.php">
           <img src="franks_logga2.png" id="logga">
           </a>
            <img src="../header/cart.png" id="cart"onmousedown="toggleCart()">
        </div>
        
        <div id="shopping" class="boi"> 
            <div id="kon"> <p>boi</p> </div>
        </div>
        
        <div id="background" onmousedown="toggleCart()" class="boi"></div>
        
    </header>
    
    <script>
        function toggleMenu(x) {
            x.classList.toggle("change");
            document.querySelector("#menu").classList.toggle("menu-down");
        }
        function toggleCart(){
            document.getElementById("menu").classList.toggle("boi");
            document.getElementById("background").classList.toggle("boi");
            document.getElementById("shopping").classList.toggle("boi");
            document.getElementById("kon").classList.toggle("boi");
        }
    </script>