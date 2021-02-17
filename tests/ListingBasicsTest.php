<?php

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
    /**
     * @test
     */
    public function
    checkToMakeSureTheGetMethodIsReturningTheCorrectResultsForId()
    {
        $data = ['id' => 1, 'title' => 'test', 'website' => 'teaforte.com',
            'email' => 'notreal@gmail.com', 'twitter' => 'twitter.com/yourname'];
        $listing = new ListingBasic($data);
        $this->assertEquals(1, $listing->getId(), 'Did not return the correct ID');
    }
    /**
     * @test
     */
    public function
    checkToMakeSureTheGetMethodIsReturningTheCorrectResultsForTitle()
    {
        $data = ['id' => 1, 'title' => 'test', 'website' => 'teaforte.com',
            'email' => 'notreal@gmail.com', 'twitter' => 'twitter.com/yourname'];
        $listing = new ListingBasic($data);
        $this->assertEquals('test', $listing->getTitle(), 'Did not return the correct title');
    }
    /**
     * @test
     */
    public function
    checkToMakeSureTheGetMethodIsReturningTheCorrectResultsForWebsite()
    {
        $data = ['id' => 1, 'title' => 'test', 'website' => 'www.teaforte.com',
            'email' => 'notreal@gmail.com', 'twitter' => 'twitter.com/yourname'];
        $listing = new ListingBasic($data);
        $this->assertEquals('http://www.teaforte.com', $listing->getWebsite(),
            'Did not return the correct Website');
    }
    /**
     * @test
     */
    public function checkExpectedOutcomeIfNoWebsiteIsEntered()
    {
        $data = ['id' => 1, 'title' => 'test', 'website' => '',
            'email' => 'notreal@gmail.com', 'twitter' => 'twitter.com/yourname'];
        $listing = new ListingBasic($data);
        $this->assertEquals('', $listing->getWebsite());
    }
    /**
     * @test
     */
    public function
    checkToMakeSureTheGetMethodIsReturningTheCorrectResultsForEmail()
    {
        $data = ['id' => 1, 'title' => 'test', 'website' => 'www.teaforte.com',
            'email' => 'notreal@gmail.com', 'twitter' => 'twitter.com/yourname'];
        $listing = new ListingBasic($data);
        $this->assertEquals('notreal@gmail.com', $listing->getEmail(),
            'Did not return the correct email');
    }
    /**
     * @test
     */
    public function
    checkToMakeSureTheGetMethodIsReturningTheCorrectResultsForTwitter()
    {
        $data = ['id' => 1, 'title' => 'test', 'website' => 'www.teaforte.com',
            'email' => 'notreal@gmail.com', 'twitter' => 'twitter.com/@yourname'];
        $listing = new ListingBasic($data);
        $this->assertEquals('twitter.com/yourname', $listing->getTwitter(),
            'Did not return the correct twitter address');
    }
    /**
     * @test
     */
    public function checksToSeeIfTheInArrayMethodReturnExpectedResults()
    {
        $data = ['id' => 1, 'title' => 'test', 'website' => 'www.teaforte.com',
            'email' => 'notreal@gmail.com', 'twitter' => 'twitter.com/@yourname'];
        $listing = new ListingBasic($data);
        $this->assertIsArray($listing->toArray(),
            'The return is not an array');

    }
    /**
     * @test
     */
    public function checkingIfSetStatusIsWorkingAsExpected()
    {
        $data = ['id' => 1, 'title' => 'test'];
        $listing = new ListingBasic($data);
        $this->assertEquals('', $listing->setStatus('basic'),
            'Did not return the correct status');
    }

}


