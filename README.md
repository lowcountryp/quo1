# quo1
=============
This is a custom quote page using jQuery and build with Bootstrap 3.  The production theme is MinamizePro, in this case.

page-q.php is the WordPress template residing in the folder of the WordPress theme.  Update the HTML to the appropriate 
URL information in the HEAD section.

form1.php is the email handler and resides in the web root directory in this iteration. configure it by updating the 
email addresses to the server names, and add the appropriate recipient email address(es).

Throughout, 'jQuery' is used in place of '$' since there were php variables names with '$' prefix that were causing problems.

It includes these behaviors:

-*-The PRODUCT field conditions input to THREADED and BEVELED fields
-*-If 'PIPE' is selected in PRODUCT, the fields are unlocked
-*-If either THREADED or BEVELED is set to Yes, the field THREADED/BEVEL TYPE is unlocked.
-*-Requirements stated the THREADED/BEVELED fields are exclusive (ie one or the other, but not both)

When the information is complete SUBMIT builds a .csv image of the quote and emails it to the customer and to the 
sales/quote processing email address specified.

Origin of the additional Bootstrap files :
The target WordPress environment had several plugins and themes that used Bootstrap, all at different levels.

LESS was used to construct a 16 column grid. The final solution was to put that css into the 'bootstrap_extended.css' file
