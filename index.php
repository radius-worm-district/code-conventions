<html>
    <head>
        <style>

            body {

                width: 514px;
                margin: 200px auto;
            }

            p {

                color: darkgoldenrod;
                font-size: 2rem;
                line-height: 145px;
                margin: 0 auto;

                text-align: center;
            }

            div {
                width: 2px;
                height: 2px;

                float: left;
            }

        </style>
    </head>
    <body>

    <?php

        require 'object.php';
        use \Just\a\Collection\of\Classes as So;

        $an_object = new So\aCollectionOfPropertiesAndMethods();
        $an_object->is( 'instantiated' )->WhereAs( "a variable" )->is( 'initialized' );

        echo "<p>" . So\aCollectionOfPropertiesAndMethods::getTitle() . "</p>";
    ?>

    </body>
</html>
