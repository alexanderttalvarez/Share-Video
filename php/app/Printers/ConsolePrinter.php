<?php

namespace  VideoImporter\Printers;

class ConsolePrinter {

    /**
     * It prints the import to the console. It prints like follows:
     * importing: "science experiment goes wrong"; Url: http://glorf.com/videos/3; Tags: microwave,cats,peanutbutter
     * 
     * @param array $videoData | The data of every video individually
     */
    public static function printVideoImport( $videoData ) {

        echo "importing: \"" . $videoData['name'] . "\"; ";
        echo "Url: \"" . $videoData['video'] . "\"; ";
        echo "importing: \"" . implode( ',', $videoData['categories'] ) . "\"\n";

    }

}