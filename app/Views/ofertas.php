<?php
$pagina = "ofertas";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Ofertas | Mercado Bom Brasil
    </title>

    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">

</head>

<body>

    <?php include "layout/menu.php"; ?>


<!-- HERO -->

<section class="hero hero-ofertas">

    <div class="container hero-content">

        <span class="badge">
            🔥 OFERTAS
        </span>

        <h1>
            Economize nas suas
            <span>compras.</span>
        </h1>

        <p>
            Confira as novidades e acompanhe
            as ofertas do Mercado Bom Brasil.
        </p>

        <a
            href="https://www.instagram.com/mercado.bom.brasil/"
            target="_blank"
            class="btn btn-red"
        >
            Ver ofertas no Instagram
        </a>

    </div>

</section>


<!-- OFERTAS -->

<section class="section">

    <div class="container">


        <div class="section-title">

            <small>
                OFERTAS ESPECIAIS
            </small>

            <h2>
                Aproveite nossas oportunidades
            </h2>

            <p>
                Fique de olho nas novidades publicadas
                pelo Mercado Bom Brasil.
            </p>

        </div>


        <div class="offer-box">

            <div>

                <span class="offer-tag">
                    OFERTA
                </span>

                <h2>
                    Preços especiais
                    para você.
                </h2>

                <p>
                    Acompanhe nossas publicações
                    e descubra as ofertas disponíveis.
                </p>

                <a
                    href="https://www.instagram.com/mercado.bom.brasil/"
                    target="_blank"
                    class="btn btn-yellow"
                >
                    Acompanhar Instagram
                </a>

            </div>

        </div>


    </div>

</section>


<!-- CATEGORIAS -->

<section class="section light-section">

    <div class="container">

        <div class="cards">


            <div class="card">

                <div
                    class="card-image"
                    style="
                    background-image:
                    url('https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&w=900&q=85');
                    "
                ></div>

                <div class="card-content">

                    <h3>
                        Hortifruti
                    </h3>

                    <p>
                        Produtos frescos para
                        sua mesa.
                    </p>

                </div>

            </div>


            <div class="card">

                <div
                    class="card-image"
                    style="
                    background-image:
                    url('https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=900&q=85');
                    "
                ></div>

                <div class="card-content">

                    <h3>
                        Mercearia
                    </h3>

                    <p>
                        Produtos para abastecer
                        sua casa.
                    </p>

                </div>

            </div>


            <div class="card">

                <div
                    class="card-image"
                    style="
                    background-image:
                    url('https://images.unsplash.com/photo-1579113800032-c38bd7635818?auto=format&fit=crop&w=900&q=85');
                    "
                ></div>

                <div class="card-content">

                    <h3>
                        Variedade
                    </h3>

                    <p>
                        Tudo para facilitar
                        suas compras.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<?php include "layout/menu.php"; ?>

</body>
</html>