<?php
require __DIR__ .'/../classes/ListingBasic.php';
require __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /**
     * @test
     */
    public function checkToSeeIfGetStatusReturnsPremium()
    {
        $data = ['id' => 1, 'title' => 'test'];
        $listing = new ListingPremium($data);
        $listing->setStatus('premium');
        $this->assertEquals('premium', $listing->getStatus(), 'Did not return premium');
    }
}
