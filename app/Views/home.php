<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mercado Bom Brasil | Viçosa - MG</title>

    <!-- CSS DO SITE -->
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">

</head>

<body>


<!-- =====================================================
     FAIXA SUPERIOR
===================================================== -->

<div class="top-stripe"></div>


<!-- =====================================================
     MENU / HEADER
===================================================== -->

<header>

    <div class="container navbar">


        <!-- LOGO -->

        <a
            href="<?= base_url('/') ?>"
            class="logo"
        >

            <img
                src="<?= base_url('images/logo-bom-brasil.png') ?>"
                alt="Mercado Bom Brasil"
            >

            <div class="logo-text">

                <strong>
                    BOM BRASIL
                </strong>

                <span>
                    Mercado • Viçosa/MG
                </span>

            </div>

        </a>


        <!-- =================================================
             MENU DAS VIEWS
        ================================================= -->

        <nav class="menu">


            <!-- INÍCIO -->

            <a
                href="<?= base_url('/') ?>"
                class="active"
            >
                Início
            </a>


            <!-- OFERTAS -->

            <a
                href="<?= base_url('ofertas') ?>"
            >
                Ofertas
            </a>


            <!-- SOBRE -->

            <a
                href="<?= base_url('sobre') ?>"
            >
                Sobre
            </a>


            <!-- CONTATO -->

            <a
                href="<?= base_url('contato') ?>"
            >
                Contato
            </a>


            <!-- WHATSAPP -->

            <a
                href="https://wa.me/5531998481333"
                target="_blank"
                class="whatsapp-button"
            >
                WhatsApp
            </a>


        </nav>

    </div>

</header>


<!-- =====================================================
     HERO PRINCIPAL
===================================================== -->

<section class="hero">

    <div class="container hero-content">


        <span class="badge">
            🛒 SEJA BEM-VINDO
        </span>


        <h1>

            Tudo para sua casa
            em um só

            <span>
                lugar.
            </span>

        </h1>


        <p>

            Qualidade, variedade e praticidade
            para suas compras no Mercado Bom Brasil.

        </p>


        <div class="hero-buttons">


            <a
                href="<?= base_url('ofertas') ?>"
                class="btn btn-red"
            >
                Ver ofertas
            </a>


            <a
                href="<?= base_url('contato') ?>"
                class="btn btn-white"
            >
                Entre em contato
            </a>


        </div>


    </div>

</section>


<!-- =====================================================
     CATEGORIAS
===================================================== -->

<section class="section">

    <div class="container">


        <div class="section-title">

            <small>
                MERCADO BOM BRASIL
            </small>

            <h2>
                Tudo o que você precisa
            </h2>

            <p>
                Encontre variedade e praticidade
                para suas compras do dia a dia.
            </p>

        </div>


        <div class="cards">


            <!-- HORTIFRUTI -->

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
                        Frutas, verduras e legumes
                        para sua mesa.
                    </p>

                </div>

            </div>


            <!-- MERCEARIA -->

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


            <!-- VARIEDADE -->

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


<!-- =====================================================
     CHAMADA PARA OFERTAS
===================================================== -->

<section class="section light-section">

    <div class="container">

        <div class="offer-box">


            <div>

                <span class="offer-tag">
                    🔥 OFERTAS
                </span>


                <h2>
                    Economize nas
                    suas compras.
                </h2>


                <p>
                    Confira nossas ofertas e acompanhe
                    as novidades do Mercado Bom Brasil.
                </p>


                <a
                    href="<?= base_url('ofertas') ?>"
                    class="btn btn-yellow"
                >
                    Ver ofertas
                </a>


            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     SOBRE
===================================================== -->

<section class="section">

    <div class="container about">


        <div class="about-image"></div>


        <div class="about-content">

            <small>
                MERCADO BOM BRASIL
            </small>


            <h2>
                Seu mercado de confiança.
            </h2>


            <p>

                O Mercado Bom Brasil está localizado
                em Santo Antônio, Viçosa - MG.

            </p>


            <p>

                Oferecemos praticidade, variedade
                e atendimento próximo para facilitar
                suas compras.

            </p>


            <div class="check">
                <span>✓</span>
                Compras na loja
            </div>


            <div class="check">
                <span>✓</span>
                Serviço de entrega
            </div>


            <div class="check">
                <span>✓</span>
                Variedade de produtos
            </div>


            <a
                href="<?= base_url('sobre') ?>"
                class="btn btn-red"
            >
                Conheça o mercado
            </a>


        </div>


    </div>

</section>


<!-- =====================================================
     CONTATO
===================================================== -->

<section class="contact-section">

    <div class="container contact-grid">


        <div>

            <small>
                ENTRE EM CONTATO
            </small>


            <h2>
                Fale com o
                <span>Bom Brasil.</span>
            </h2>


            <p>

                Estamos à disposição para
                atender você.

            </p>


            <a
                href="<?= base_url('contato') ?>"
                class="btn btn-yellow"
            >
                Ver contatos
            </a>


        </div>


        <div class="contact-mini">


            <div>

                <strong>
                    📞 Telefone
                </strong>

                <span>
                    (31) 3874-1333
                </span>

            </div>


            <div>

                <strong>
                    💬 WhatsApp
                </strong>

                <span>
                    (31) 99848-1333
                </span>

            </div>


            <div>

                <strong>
                    📍 Endereço
                </strong>

                <span>
                    Av. Joaquim Lopes de Faria, 28
                    - Santo Antônio
                    - Viçosa/MG
                </span>

            </div>


        </div>


    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="container footer-content">


        <div>

            <h3>
                Mercado Bom Brasil
            </h3>

            <p>

                Qualidade, variedade e praticidade
                para suas compras em Viçosa - MG.

            </p>

        </div>


        <div>

            <h3>
                Navegação
            </h3>

            <a href="<?= base_url('/') ?>">
                Início
            </a>

            <a href="<?= base_url('ofertas') ?>">
                Ofertas
            </a>

            <a href="<?= base_url('sobre') ?>">
                Sobre
            </a>

            <a href="<?= base_url('contato') ?>">
                Contato
            </a>

        </div>


        <div>

            <h3>
                Contato
            </h3>

            <a href="tel:+553138741333">
                📞 (31) 3874-1333
            </a>

            <a
                href="https://wa.me/5531998481333"
                target="_blank"
            >
                💬 WhatsApp
            </a>

            <a
                href="https://www.instagram.com/mercado.bom.brasil/"
                target="_blank"
            >
                📸 @mercado.bom.brasil
            </a>

        </div>


    </div>


    <div class="copyright">

        © <?= date('Y') ?>
        Mercado Bom Brasil.
        Todos os direitos reservados.

    </div>

</footer>


</body>

</html>