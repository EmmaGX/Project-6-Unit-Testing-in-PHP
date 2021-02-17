<?php

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
    /**
     * @test
     */
    public function checksToSeeIfCocIsReturnsTheExpectedResults()
    {
        $data = ['id' => 1, 'title' => 'test'];
        $listing = new ListingFeatured($data);
        $listing->setCoc('5,000');
        $this->assertIsString($listing->getCoc());

    }
    /**
     * @test
     */
    public function checksToSeeIfGetCocReturnsTheCorrectResult()
    {
        $data = ['id' => 1, 'title' => 'test'];
        $listing = new ListingFeatured($data);
        $listing->setCoc('5,000');
        $this->assertEquals('5,000', $listing->getCoc(), 'Did not return coc');
    }
}