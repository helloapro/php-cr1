# Address Book
_Site allows users to input their contact information_

## Description
This address book will allow the user to input contact information and display a list of all contacts entered by the user. The user can ultimately clear the whole address book and start over if they wish.

# Setup Instructions
To create this address book with the tools in php we've learned, be sure to set up your project folders correctly with an app, src, views, and web folders. Create a composer.json file and write the code to require the use of silex and twig. Install composer through your terminal, and a vendor folder will be created.

From here, you should reference silex and twig in your app/app.php to get your application running smoothly. In app.php you should also be requiring the use of autoload.php in your vendor file and referencing your views folder. Set up the Contact class within src/Contact.php with all appropriate Constructors, Getters, Setters, and Methods. Require in your website/index.php the use of your app/app.php file to run the website. Set up the html.twig pages with the appropriate content and forms for your user to input information on their contacts.

## Languages
php (utilizing applications in silex and twig), html, md, css

## Usage
Fill out the contact form and submit! This program will store your information and display the information you submit back when prompted.

## Specifications
* Spec #1 The program should allow the user to input a Contact's information and display the information back for user's review:
    * Example Input: "Polly Pocket", "555-555-5555", "123 Back Pocket Lane"
    * Example Output: "You created a contact! Here's the information for your review below: 'Polly Pocket', '555-555-5555', '123 Back Pocket Lane'"
* Spec #2 The user should be able to click a link back to the home page with the original input form for additional inputs and see the Contacts they've added so far:
    * Example Input: User clicks link to view all contacts.
    * Example Output: Application takes the user back to their homepage with the original form and a list of all the contacts they've added. "Here are all your Contacts thus far:" (etc.)
* Spec #3: The user should be able to clear all contacts to start a fresh Address Book.
    * Example Input: User clicks 'Clear all contacts' button.
    * Example Output: Application takes user to a page confirming that all their contacts are cleared. Here we'll also have the same link to take them to the original form with no inputted contacts listed any longer.

Additional Specs to add in the future:
* A singular delete function

## Known Bugs
The form is not setup to catch user errors (e.g. if they use letters instead of integers within the phone number, if they were to leave information in the form blank). Since this is a personal Address Book though, it seems fair to let the user keep their information in whatever format they desire.

I would like to be familiar enough with bootstrap to understand how to get the First and Last Name bubbles of the form on one row side-by-side and leave the Phone and Address rows separate.

## Author
_April Peng_

## License
_Copyright(c) 2016 April Peng_
