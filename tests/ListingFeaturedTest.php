<?php
require __DIR__ .'/../classes/ListingBasic.php';
require __DIR__ .'/../classes/ListingPremium.php';
require __DIR__ .'/../classes/ListingFeatured.php';

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /**
     * @test
     */
    public function checkToSeeIfGetStatusReturnsFeatured()
    {
        $data = ['id' => 1, 'title' => 'test'];
        $listing = new ListingFeatured($data);
        $listing->setStatus('featured');
        $this->assertEquals('featured', $listing->getStatus(), 'Did not return featured');
    }
}