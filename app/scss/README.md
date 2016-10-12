#About Styles

**[inuitcss](https://github.com/inuitcss)** is embedded in its last version (not *inuit.css*).  
This framewok provides a handfull of handy classes and styles that do just the minimum to set up the design: no colors, no sizes, no "visible styles", just grids, responsive tools, layout classes etc.  
In addition to **inuitcss**, many [style files](/app/scss/) are provided to organize your styling:

* Some [functional](/app/scss/functionals/) files:
	* for variables,
	* for overriding *inuitcss*,
	* some helpers,
	* some handy functions,
	* a few mixins.
* *Basic* styles,
* *Structure* styles,
* *header* and *footer* styles,
* Styles for *navigation*, *pagination*, *search*,
* *Titles* and *forms* styles,
* *Social networks* and *plugins* related styles,
* a generated file, *sprites*, that holds the sprites styles.

######All these files are here as a guide, everything can be overriden, upscaled, changed, etc.

##Sass and CSS Best Practices
To see how to use all the files provided here, have a look at the [configuration help file](/configuration.md##Styles).

##Notation
The preferred notation for classes is **BEM**.

###Principles
**BEM** Stands for **B**lock, **E**lement, **M**odifier.  
The main principle is stating that what you find on a page can be split into main blocks, that contain one or several elements. These blocks and elements can vary depending on the context or on the intend of the author.  
As an example, a list of results can present its first item as more accurate. So you can find a *results block*, containing *results elements*, with its *first results element* visually *modified* (enlarged? colored?).  
The structure would be as follows:

* results **<= block**
	* results\_\_item results__item--special **<= element + modifier**
	* results__item **<= element**
	* results__item
	* results__item

The block holds a name that is transfered to the contained element: the `results` block contains `results__item`(s). A modified element also inherit from its parent block and from the element it modifies: `results__item results__item--special`.

###Terms list
The following lists are non-limitative and shall be taken as starting points. Most of them come from experience or from several popular frameworks (**Twitter bootstrap**, or **inuitcss**).

####Blocks
The block is named after its nature, or function in the page. Forget the "block" term as every blocks are... blocks! Also avoid hyphens as much as possible, just to reduce typos risks. You can consider creating *sub-blocks* where appropriate.
```
page
header
logo
footer
menu
search
authentication
socials
navigation
teaser
widget
article
...
```

####Elements
As the element is a unit of the surrounding block, please consider wisely when tempted to use the `__item` element name... Maybe you should rely on the `XXX-item` block as you will surely encounter *sub-elements* inside. Don't forget to inherit the block name (ie: `widget__logo`, `article__summary`...).
```
__item
__icon
__image
__input
__button
__link
__logo
__text
__lede
__summary
__data
__title
...
```
####Modifiers list
Don't forget that the modifier doesn't replace the element, it comes over the element:

* :x:: `block__element--modifier`
* :white_check_mark:: `block__element block__element--modifier`

Most of those modifiers come with their opposite, or as a sequence of terms. Choose the terms that suit you the best.

- **Status**:
```
--enabled --disabled
--active --inactive
--positive --negative
--opened --closed
--soft --hard
```
- **States**:
```
--current --selected --done
--primary --secondary ...
--first --last
--default --alternative
--reverse --inverse --rev
```
- **Infos**:
```
--info --warning --danger
--success --error
--neutral --special
--full
```
- **Sizes**:
```
--alpha / --beta / --gamma / --delta / --epsilon / --zeta
--size-s / --size-m / --size-l / --size-xl
--n / --ne / --e / --se / --s / sw / --w / --nw
--short / --long
--simple / --complex
...
```

The important thing is to always remember that the naming should reflect the functional aspect of the content or its relation to the context rather than its appearance. Thus, avoid terms such as `text--red` or `block--right` and prefer terms like `message--warning` or `article--secondary`.

##Nesting
**Sass** introduces nesting in CSS and thats fabulous. But it can also be a drawback: browsers tend to take a long time to parse a long CSS selector. The shorter, the faster.

Try to avoid nesting over 3 levels. You don't have to reproduce the whole DOM tree to get to an element. In the following selectors, the second is probably enough and way much faster:
* :x::
```css
.element > .element__item.element__item--modified > span > a.element__link--last {}
```
* :white_check_mark::
```css
.element .element__item--modified .element__link--last {}
```
Always try to represent what will be the length of the selector, don't nest everything to map the DOM, be selective.

##Formating and ordering of declarations
On a large project, styles files can become quite long. Don't be tempted to put all the declarations on a single line! If it shortens the file, it doesn't help the reader.

Put the selector on a line, with its opening curly brace, then put each declaration on its own line, this is much more readable.

No order is required by CSS in the declarations but don't be messy. Choose an logical order and stick to it! The two main orders are:

* **Alphabetical**: no question on where to put a declaration relatively to the others, easy to find.
* **Box-model order**: as fast as in the alphabetical order but you will gain a real logic in your declarations:
	1. Display related declarations:
		1. Display,
		2. Visibility,
		3. Clearing and floating.
	2. Position related declarations:
		1. Position type,
		2. Coordinates,
		3. Stacking.
	3. Outside the element:
		1. Margins,
		2. Borders,
		3. Shadows,
		4. Dimensions.
	4. Inside the element:
		1. Background,
		2. Padding,
		3. Content
		4. Text related:
			1. Text-wide declarations,
			2. Line-wide related,
			3. Letter-wide related,
			4. Font-related
	5. Others:
		1. Cursor,
		2. Transformations and transitions

This requires a bit of training but with in a small amount of time you will find the declarations even faster.
