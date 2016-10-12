#/app

This is where you work!

This is the only place where you should work. Any other directory in root directory shall not be modified.

Here you will find a place to:

* write your Javascripts,
* write your styles,
* write your templates.

##/app/scripts
This is for javascripts.

##/app/scss
This is for scss files, intended to become CSS files.

##/app/assets
All the content of this directory will just be copied, as-is, into the public directory.  
It means that:
```
/app/assets/a-file.html
/app/assets/another-file.txt
/app/assets/css/a-style-file.css
/app/assets/includes/footer.php
```
will become:
```
/public/a-file.html
/public/another-file.txt
/public/css/a-style-file.css
/public/includes/footer.php
```
after the **Gulp** magic.
