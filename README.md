Project 6 Unit Testing in PHP
Project Instructions: To complete this project, 
follow the instructions below. If you get stuck, 
ask a question on Slack or in the Treehouse Community.

12 steps

1. Use Composer to install PHP Unit ONLY for dev. 
  Put all tests in the "tests" directory.
  
2. Configure the phpunit.xml file to print test 
  results in color
  
3. Write tests for the ListingBasic class to ensure
  that all three Exception messages are returned 
  as expected.
  
4. Write a test for the ListingBasic class to ensure 
  that an Object is created when passing the minimum, 
  id and title.
  
5. Write a test for the ListingBasic class to ensure 
  that getStatus method returns 'basic'.
  
6. Write a test for the ListingBasic class to ensure 
  that the get method for each property is returning 
  the expected results: id, title, website, email, 
  twitter.
  
7. Write a test for the ListingBasic class to ensure 
  that the toArray method returns an array where each   
  item equals the expected results: id, title, website, 
  email, twitter.
  
8. Write a test for the ListingPremium class to ensure 
  that getStatus method returns 'premium'.
  
9. Write a test for the ListingPremium class to ensure 
  that getDescription method returns the expected results.
  
10. Write a test for the ListingFeatured class to ensure 
  that getStatus method returns 'featured'.

11. Write a test for the ListingFeatured class to ensure 
  that getCoc method returns the expected results.
  
12. Add a new image feature using the tests in the 
  ListingImageTest.php file as a guide. When the feature 
  has been added properly, all tests should pass
