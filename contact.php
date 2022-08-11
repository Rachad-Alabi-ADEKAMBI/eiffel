<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>Contact</title>
</head>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
            <div class="contact">
                <div class="contact__image">
                    <img src="public/images/pexels-samad-ismayilov-735552.jpg" alt="">
                    <p class="text">
                        75016, Paris XXX
                        France, XXX
                    </p>

                    <p class="email">
                    contact@maisoneiffel.com
                    </p>

                    <p class="phone">
                        +33(0)9 85 02 53 41
                        +33(0)6 46 84 64 96
                    </p>
                </div>

                <form class="contact__form">
                    <h1 class="subtitle">
                    Lorem ipsum dolor sit amet
                    </h1>

                    <div class="name">
                        <label for="">
                            <input type="text" name='' placeholder="Nom">
                        </label>

                        <label for="">
                            <input type="text" placeholder="Email">
                        </label>
                    </div>

                    <label for="">
                        <input type="text" placeholder="Votre message">
                    </label>

                        <button class='' type="submit">
                            Envoyer
                        </button>
                </form>
            </div>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>