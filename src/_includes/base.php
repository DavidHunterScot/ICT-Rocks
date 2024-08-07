<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>ict.rocks</title>
        
        <link rel="stylesheet" href="/assets/w3css/4.15/w3.css">
        <link rel="stylesheet" href="/assets/w3css/w3-colors-metro.css">
        <link rel="stylesheet" href="/assets/webfonts/nunito/nunito.css">

        <style type="text/css">
            body, h1, h2, h3, h4, h5, h6
            {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="w3-black w3-large">
        <header class="w3-black w3-border-bottom w3-border-metro-dark-orange">
            <div class="w3-auto">
                <h1 class="w3-text-light-gray w3-large w3-center"><b><a href="/" class="w3-button w3-hover-none w3-hover-text-white">ict.rocks</a></b></h1>
            </div>
        </header>

        <section class="w3-padding-64 w3-metro-darken" style="min-height: 85vh;">
            <div class="w3-auto w3-padding">
                <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>
            </div>
        </section>

        <footer class="w3-black w3-border-top w3-border-metro-dark-orange">
            <div class="w3-auto w3-padding">
                <p class="w3-small w3-center">Copyright &copy; ict.rocks.</p>
            </div>
        </footer>
    </body>
</html>
