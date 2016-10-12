#About Javascript

**[jQuery](http://jquery.com/)** is embedded in its latest 3.x version.  
A full bunch of other scripts full handy stuff is provided:

* **[base.js](/app/scripts/functionals/base.js)**:
	* contains a console handler (if it lacks in the browser),
	* some generic variables,
	* a translations object, to store common used words in different languages.
* **[helpers.js](/app/scripts/functionals/helpers.js)** contains some useful small functions that you will use elsewhere:
	* a *findData* function,
	* an *hourGlass manager*,
	* a *touch device detector*,
	* an advanced *Get-Url vars* function,
	* an *image preloader*,
	* *trim functions*.
* **[functions.js](/app/scripts/functionals/functions.js)** stores more advanced functions that could be handy:
	* pop-up, print, close, history, favorites handler,
	* a *size-egalizer* for rows and columns,
	* a *click-enlarger* to react on a full area as on the small link contained,
	* a *smooth scroll* function,
	* a *ghost bar manager*,
	* everything to *insert an iframe or a flash* doc,
	* a *mailto encoder/decoder*.

######All those scripts can be activated on demand but be a little careful, some depends on others (especially in *base* and *helpers*).

##Javascript Best Practices

###Notation
The preferred notation for javascript is `camelCase`.

Variable names often describe an element that is related to another: the list of items, the number of items, the link of the item, etc. To inform the reader on the relation between these variables, use a prefix, or a suffix and type in camelCases, it reduces the length of the names (compared to dashes or underscores):

* :ok_hand:: `items-list, number_of_items, linkitem`
* :white_check_mark:: `itemsList, itemsNumber, itemLink`

At least, be consistent, pick a method and stick to it!

###General coding
The first command is: "**Don't harm!**"  

* **Don't be global**: try not to set global variables unless necessary. If your code doesn't need to be accessed at any time, encapsulate it:
	* :x::
```javascript
var myFunction = function () {
	...
};
myFunction();
```

	* :white_check_mark::
```javascript
(function () {
	...
})();
```
* Optimize **vars declarations**: try to declare all your variables in the same place (usually at the beginning of the function, at least at the beginning of each scope). And don't forget to declare functions:
	* :x:: `function myFunction () {...}`
	* :white_check_mark: `var myFunction = function () {...}`
* Don't compare to strings when you can **compare to nature**:  
	* :x:: `if (typeof neverDeclared == "undefined") {...}`
	* :white_check_mark:: `if (neverDeclared === undefined) {...}`
* **Don't leave `console` calls** after developping. If it's important, leave them but comment them! A simple trick not to forget a `console` call: type them at the beginning of the lines, not within the incrementation, this way you'll see them much more faster.
* **Say what you do**: there is no such deception as finding vars like: *var1*, *myVar*, etc. but use meaningful terms: *listItems*, *nbItems*, etc.
* **Comment your code**: Of course you know what you're doing, no need to comment that smart function. But maybe in three monthes, after the holidays, you will not be that aware of what's happening in that function so, always comment: what is it for?, what it needs?, what it returns?

###ESLint
In order to help you to write better code, a linting tool is included in the project: **[ESLint](http://eslint.org/)**. This tool will not correct your code, nor block anything if he doesn't like it, but it will just point out to you what you could/should correct or enhance.

To lint a javascript file, open your favorite command line tool, go into the javascript directory and:
```
eslint the-file-to-test.js
```
A listing with all what could be or should be corrected appears. Now it's up to you to go into your javascript file and correct it or not.  
You can lint a file as many times as you want but you should at least lint it before pushing it onto the distant repo.

###JSLint
**[JSLint](http://jslint.com/)** is an online tool similar to ESLint. There is an NPM package for it but as far as I know, it is a bit too intrusive as a package: you must integrate some JSLint code into your files to check them and it can block compilation if it's not happy with what he finds.

Use it online. Don't forget to tick some checkboxes at the bottom or you'll end up with a bunch of errors no matter how you wrote your code :smiley:.