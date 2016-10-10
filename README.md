# quo1
=============
This is a custom quote page using jQuery and build with Bootstrap 3.

page-q.php is the WordPress template residing in the root folder of the theme.

It includes these behaviors:

-*-The PRODUCT field conditions input to THREADED and BEVELED fields
-*-If 'PIPE' is selected in PRODUCT, the fields are unlocked
-*-If either THREADED or BEVELED is set to Yes, the field THREADED/BEVEL TYPE is unlocked.
-*-Requirements stated the THREADED/BEVELED fields are exclusive (ie one or the other, but not both)

Origin of the additional Bootstrap files :
The target WordPress environment had several plugins and themes that used Bootstrap, all at different levels.

LESS was used to construct a 16 column grid. The final solution was to put that css into the 'bootstrap_extended.css' file