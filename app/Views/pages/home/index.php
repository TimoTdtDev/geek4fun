<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            link_tag(base_url().'/public/scss/main.css');
            link_tag(base_url().'/public/scss/pages/home/home.css');
        ?>

        <title><?= $title ?></title>
    </head>
    <body>
        <script type='text/javascript'>
            document.addEventListener('DOMContentLoaded', function () {
                window.setTimeout(document.querySelector('svg').classList.add('animated'),1000);
            })
        </script>
        <img class="animated" id="freepik_stories-server" src="/public/images/svg/servers.svg" alt="Servers image">

    </body>
</html>