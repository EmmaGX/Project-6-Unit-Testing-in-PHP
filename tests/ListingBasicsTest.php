<?php
require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicsTest extends TestCase
{
    /**
     * @test
     */
    public function CheckToSeeIfExceptionMessageWillShowWhenNoDataIsEntered()
    {
        $data = [];
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
        $listing = new ListingBasic();
        $listing->setValues($data['id']);
    }

    /**
     * @test
     */
    public function checksToSeeIfExceptionIsThrownIfNoIdIsSet()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid id');
        $data = ['id' => null, 'title' => 'test'];
        $listing = new ListingBasic($data);
        $listing->setValues($data = ["id" => null]);
    }
    /**
     * @test
     */
    public function checksToSeeIfExceptionIsThrownIfNoTitleIsSet()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid title');
        $data = ['id' => 1, 'title' => null];
        $listing = new ListingBasic($data);
        $listing->setTitle($data = ['title' => null]);
    }
    /**
     * @test
     */
    public function checkToSeeIfObjectIsCreatedWhenPassingIdAndTitle()
    {
        $data = ['id' => 1, 'title' => 'test'];
        $listing = new ListingBasic($data);
        $this->assertIsObject($listing);
    }
    /**
     * @test
     */
    public function checkToSeeIfGetStatusReturnBasic()
    {
        $data = ['id' => 1, 'title' => 'test'];
        $listing = new ListingBasic($data);
        $listing->setStatus('basic');
        $this->assertEquals('basic', $listing->getStatus(), 'Did not return basic');
    }
}

