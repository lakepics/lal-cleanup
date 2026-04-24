<?php $hero_heading = get_field('hero_heading');
    $hero_background = get_field('hero_background_image');
    $hero_content = get_field('hero_content'); 
    ?>

<style>
        .hero {
            padding: 0;
            display: grid;
            justify-items: center;
            align-items: center;
            grid-template-columns: 1fr [content] 650px 1fr;
            grid-template-rows: 500px;
            background: url('<?php echo $hero_background['url']; ?>') no-repeat;
            background-size: cover;
            overflow: hidden;
        }
        @media screen and (max-width: 600px) {
            .hero {
                grid-template-columns: [content] 480px;
            }
            .hero-content {
                padding: 0px 30px;
            }
        }

        .hero-overlay {
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, .5);
            grid-column: 1/-1;
            grid-row: 1/-1;
            z-index: 10;
        }

        .hero-content {
            grid-column: content;
            grid-row: 1/-1;
            z-index: 20;
        }

        .hero h1, .hero p {
            color: #FFFFFF;
            text-align: center;
            margin-bottom: 1rem;
        }
        .hero p {
            max-width: 40em;
        }
    </style>

    <div class="container-fluid hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1><?php echo $hero_heading; ?></h1>
            <p><?php echo $hero_content; ?></p>
        </div>
    </div>