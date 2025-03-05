<div class="menu">
    <button> <a href="index.php">Strona Główna</a> </button>
    <button> <a href="login.php">Zaloguj</a> </button>
    <button> <a href="admin.php">Admin</a> </button>
</div>
<h1 style="text-align: center;">Internetex Dobry Internet</h1>
<div class="content">
    <?php 
        if(isset($_SESSION["login"]) && !($_SERVER["REQUEST_METHOD"] == "POST")) {
            echo "Jesteś zalogowany jako ".$_SESSION["login"];
        }
    ?>
</div>