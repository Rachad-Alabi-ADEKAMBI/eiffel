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
                    <div class="contact__image__content">
                    <img src="public/images/pexels-samad-ismayilov-735552.jpg" alt="">
                    <p class="text">
                        75016, Paris XXX <br>
                        France, XXX
                    </p>

                    <p class="email">
                    contact@maisoneiffel.com
                    </p>

                    <p class="phone">
                        +33(0)9 85 02 53 41 <br>
                        +33(0)6 46 84 64 96
                    </p>

                    <div class="linkedin">
                        ln
                    </div>
                    </div>
                </div>

                <div class="contact__form">
                    <h1 class="subtitle">
                    Lorem ipsum <br> dolor sit amet
                    </h1>

                    <form action="" method='' class="form">
                            <div class="name">
                                    <label for="">
                                        <input type="text" placeholder="Nom">
                                    </label>

                                    <label for="">
                                        <input type="text" placeholder="Email">
                                    </label>
                            </div>

                            <div class="name">
                                    <label for="">
                                        <input type="text" class='message'
                                        placeholder="Votre message">
                                    </label>
                            </div>
                                <button>
                                    Envoyer
                                </button>
                        </form>
                </div>
            </div>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>