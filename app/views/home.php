<?php
if (empty($_SESSION)) {
    echo "<script>location.href='/user_login';</script>";
}
?>

<div class="container">
    <div class="row">
        <?php
        echo "Óla, " . $_SESSION["nome"];
        // echo "<a href='logout.php' class='btn btn-danger'>Sair</a>";
        ?>
    </div>
</div>