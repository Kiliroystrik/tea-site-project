<?php require 'template/header.php' ?>

<main>
    <div class="container">
        <!-- SLIDER -->
        <p class="greeting">いらっしゃいませ !</p>
        <h1>Bienvenue sur Thé-Japon, votre site de vente de thé préféré !</h1>
        <section>
            <h2>La selection du moment</h2>
            <div>
                <?php require_once 'controller/Article.php' ?>
            </div>

        </section>



    </div>
</main>

<?php require 'template/footer.php' ?>

</body>

</html>