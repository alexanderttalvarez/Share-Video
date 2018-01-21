<?php

namespace VideoImporter\Importers;

use \VideoImporter\Interfaces\ImporterInterface;

class FlubImporter implements ImporterInterface {

    private $fileName = 'flub.yaml';

    /**
     * It gets the Videos from the Flub feed
     * 
     * @return array | Array with the data prepared to be inserted in the database
     */
    public function getVideos()
    {
        $content = file_get_contents( FEED_PATH . DIRECTORY_SEPARATOR . $this->fileName );

        return $this->transformFormat( yaml_parse( $content ) );
    }

    /**
     * It transforms the data from the Flub feed to have it ready for the database insertion
     * 
     * @param array | Array of Flub videos
     * @return array | Array with the data prepared to be inserted in the database
     */
    public function transformFormat( $feedData ) {

        $transformedData = [];
        foreach( $feedData as $f ) {
            $transformedData[] = [
                'video'      => $f['url'],
                'name'       => $f['name'],
                'categories' => explode( ',', str_replace(', ', ',',  $f['labels'] ) )
            ];
        }

        return $transformedData;
    }

}