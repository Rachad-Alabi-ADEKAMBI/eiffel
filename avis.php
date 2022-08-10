<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
            <div class="avis">
                <div class="avis__form">
                    <p class="text">
                        Votre avis compte
                    </p>

                    <h1>
                        Laisser un avis
                    </h1>

                    <form action="" method=''>
                      <div class="name">
                            <label for="">
                                <input type="text" placeholder="Nom">
                            </label>

                            <label for="">
                                <input type="text" placeholder="Email">
                            </label>
                      </div>

                      <label for="">
                        <input type="text" class='message' placeholder="Votre message">
                      </label>

                        <label for="">
                            <button>
                                Envoyer
                            </button>
                        </label>
                    </form>


                </div>

                <div class="avis__image">
                    <div class="avis__image__white">
                        <div class="avis-author">
                            <img src="public/images/27de1f60e3c1a90a389aa6794cef999b.jpeg" alt="">
                            <p class="name">
                                Cassandra T.
                            <br>
                                ******
                            </p>

                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex voluptate
                                 mollitia accusamus fugit incidunt odio est expedita deserunt,
                                 quidem doloribus repellat possimus sapiente natus animi velit.
                            </p>
                        </div>
                    </div>

                    <div class="avis__image__black">
                        <img src="public/images/pexels-samad-ismayilov-735552.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="avis__main">
               <div class="avis__main__item">
                    <div class="avis-author">
                        <img src="" alt="">
                        <p class="">
                            Cassandra T.
                        </p>
                    </div>

                    <div class=''>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Possimus soluta cupiditate nisi perferendis adipisci officia quidem obcaecati
                            quasi ea recusandae maxime odit, itaque similique mollitia est provident. Doloribus, sint tenetur.
                        </p>

                        <p class="text grey">
                            08 JUillet 2022
                        </p>
                    </div>
               </div>

               <div class="avis__main__item">
                    <div class="avis-author">
                        <img src="" alt="">
                        <p class="">
                            Cassandra T.
                        </p>
                    </div>

                    <div class=''>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Possimus soluta cupiditate nisi perferendis adipisci officia quidem obcaecati
                            quasi ea recusandae maxime odit, itaque similique mollitia est provident. Doloribus, sint tenetur.
                        </p>

                        <p class="text grey">
                            08 JUillet 2022
                        </p>
                    </div>
               </div>

               <div class="avis__main__item">
                    <div class="avis-author">
                        <img src="" alt="">
                        <p class="">
                            Cassandra T.
                        </p>
                    </div>

                    <div class=''>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Possimus soluta cupiditate nisi perferendis adipisci officia quidem obcaecati
                            quasi ea recusandae maxime odit, itaque similique mollitia est provident. Doloribus, sint tenetur.
                        </p>

                        <p class="text grey">
                            08 JUillet 2022
                        </p>
                    </div>
               </div>
            </div>

            <ul class="pagination">
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
            </ul>
        <?php include 'footer.php'; ?>
    </div>

</body>
</html>