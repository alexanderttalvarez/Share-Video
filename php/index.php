<?php

require "vendor/autoload.php";

use VideoImporter\App;

if( !empty( $argv ) ) {

    if( count( $argv ) > 1 ) {
        array_shift( $argv );
        $app = new App( $argv );
    } else {
        echo "import requires at least one argument";
    }

}