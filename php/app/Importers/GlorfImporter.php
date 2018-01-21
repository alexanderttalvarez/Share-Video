<?php

namespace VideoImporter\Importers;

use \VideoImporter\Interfaces\ImporterInterface;

class GlorfImporter implements ImporterInterface {

    private $fileName = 'glorf.json';

    /**
     * It gets the Videos from the Glorf feed
     * 
     * @return array | Array with the data prepared to be inserted in the database
     */
    public function getVideos()
    {
        $content = file_get_contents( FEED_PATH . DIRECTORY_SEPARATOR . $this->fileName );

        return $this->transformFormat( json_decode( $content, TRUE )['videos'] );
    }

    /**
     * It transforms the data from the Glorf feed to have it ready for the database insertion
     * 
     * @param array | Array of Glorf videos
     * @return array | Array with the data prepared to be inserted in the database
     */
    public function transformFormat( $feedData ) {

        $transformedData = [];
        foreach( $feedData as $f ) {
            $transformedData[] = [
                'video'      => $f['url'],
                'name'       => $f['title'],
                'categories' => $f['tags']
            ];
        }

        return $transformedData;
    }

}