<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php disci json</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <div id="app">
        <?php
        include __DIR__ . '/content/header.php'
        ?>
        <main>
            <section class="card-section">
                <div class="container">
                    <div class="row row-gap-4">
                        <div v-for="(product,i) in products" class=" col-4">
                            <div class="card ms_card" data-bs-toggle="modal" :data-bs-target="'#cardModal' + i">
                                <div class="card-body text-center">
                                    <img :src="product.img" alt="" class="card-img-top">
                                    <p class="title">{{product.title}}</p>
                                    <p>Lingua: {{product.language}}</p>
                                    <p>Voto: {{product.vote}}</p>
                                </div>
                                <div class="modal fade" :id="'cardModal' + i" tabindex="-1" :aria-labelledby="'cardLabel' + i" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content ms_card_modal">
                                            <div class="modal-body ms_card_modal">
                                                <img :src="product.img" alt="" class="card-img-top">
                                                <div class="card-body text-center">
                                                    <p class="title">{{product.title}}</p>
                                                    <p>Lingua: {{product.language}}</p>
                                                    <p>Voto: {{product.vote}}</p>
                                                    <p>Genere: {{product.genre.name}}</p>
                                                    <p>Descrizione: {{product.genre.description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/f5e507a464.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>
</html>

