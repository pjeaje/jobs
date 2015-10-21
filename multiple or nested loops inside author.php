I need the following to be placed inside author.php in the following order...

Display all the author's posts from the custom post type (AAAAAAA), then
Display all the author's posts from the custom post type (BBBBBBB), then
Display the author's user meta from their profile, then
List all the author's normal posts from the author, then
List all the author's posts from the custom post type (CCCCCCC)

In effect this is 5 loops inside the author.php page

Points to note...
I want all the code to have closed php tags e.g
This...
<?php blah blah ?>
<p>something here</p>
<?php ?>

Not this...
<?php blah; { ?>
echo "<p>something here</p>";
<?php } ;?>

Some handy links...
http://wordpress.stackexchange.com/questions/203499/display-custom-post-type-posts-first-then-default-posts
http://wordpress.stackexchange.com/questions/72203/multiple-loops-in-same-page-without-duplicate-content

