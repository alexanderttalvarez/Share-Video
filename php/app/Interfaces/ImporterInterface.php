<?php

namespace VideoImporter\Interfaces;

interface ImporterInterface {

    /**
     * This method is in charge of retrieving the data from the particular feed
     */
    public function getVideos();

    /**
     * This method transforms the data from the feed to the one used in the application
     */
    public function transformFormat( $feedData );

}