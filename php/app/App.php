<?php

namespace VideoImporter;

use VideoImporter\DataStorage\DataStorage;

class App {

    /**
     * It calls the importers
     * 
     * @param array $feeds | The name of all the feeds
     */
    function __construct( $feeds ) {

        // Running all the importers that came through the parameters in the command "import"
        foreach ( $feeds as $feed ) {

            $feedClass = "\VideoImporter\Importers\\" . $feed . "Importer"; // Preparing the name of the classes

            if( class_exists( $feedClass ) ) {
                $importer = new $feedClass();
                $videos = $importer->getVideos();

                // Saving every video
                foreach( $videos as $video ) {
                    DataStorage::save( $video );
                }
            }
            
        }

    }

}