<main class="row ">
    <div class="col-6 text-center color-pink p-0">
        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner w-100 ">
                <?

                $musicien = $req1->fetchAll();

                ?>

                <div class="carousel-item active w-100">
                    <img src="public/images/<? echo $musicien[0]['cheminP']; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=""> <? echo $musicien[0]['nomM'], " ", $musicien[1]['prenomM'] ?></h5>

                    </div>
                </div>

                <div class="carousel-item">
                    <img src="public/images/<? echo $musicien[1]['cheminP']; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><? echo $musicien[1]['nomM'], " ", $musicien[1]['prenomM'] ?></h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="public/images/<? echo $musicien[2]['cheminP']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><? echo $musicien[2]['nomM'], " ", $musicien[2]['prenomM'] ?></h5>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="col-6 color-dark text-center text-white align-items-center justify-content-center">
        <p class="row h-100 justify-content-center align-items-center" id="pres">
            Nos musiciens font les meilleures musiques du monde. Le Jazz c'est une passion pour eux. Nous serions ravis de vous croiser en concert!
            <span class="text"> Prochaine date: 15/10/2000 à l'Olympia</span>

            <span id="citation" class="text rounded">L'amour c'est comme le jazz : c'est n’importe quoi, mais pas n'importe comment.

                “Si le rap excelle, le Jazz en est l’étincelle.” </span>
            <span>
                MC Solaar
            </span>

        </p>


    </div>



</main>