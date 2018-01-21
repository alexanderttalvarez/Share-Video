<?php

namespace VideoImporter\DataStorage;

use VideoImporter\Printers\ConsolePrinter;

class DataStorage {

    /**
     * It receives the data from one video and saves it
     * 
     * @param array @videoData | An array with all the data of the video
     */
    public static function save( $videoData ) {

        // Implement here the logic for saving the data, either MySQL, Cassandra, or any other storage option

        // Checking if there was no errors while saving the data. Printing if everything went correctly
        if( true ) {
            ConsolePrinter::printVideoImport( $videoData );
        } else {
            echo "Error saving the data\n";
        }

    }

}