<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use VideoImporter\Importers\FlubImporter;
use VideoImporter\Importers\GlorfImporter;

final class FormatTest extends TestCase {

    public function testGlorfIsCorrectlyTransformed()
    {
        $glorfImporter = new GlorfImporter();
        $videos = $glorfImporter->getVideos();

        foreach( $videos as $video ) {
            $this->assertArrayHasKey('video', $video, 'Glorf does not include a video key');
            $this->assertArrayHasKey('name', $video, 'Glorf does not include a name key');
            $this->assertArrayHasKey('categories', $video, 'Glorf does not include a categories key');
        }
        
    }

    public function testFlubIsCorrectlyTransformed()
    {
        $flubImporter = new FlubImporter();
        $videos = $flubImporter->getVideos();

        foreach( $videos as $video ) {
            $this->assertArrayHasKey('video', $video, 'Flub does not include a video key');
            $this->assertArrayHasKey('name', $video, 'Flub does not include a name key');
            $this->assertArrayHasKey('categories', $video, 'Flub does not include a categories key');
        }
        
    }

}