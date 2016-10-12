#New project Installation

You're just a few steps away from having a full ready-to-use project directory. The installation process consists of:

1. Creating a new repository,
1. Installing the *Bower components* and *Node modules*,
3. Installing *Gulp*,
4. Setting up your server.

##Create a new repository
1. Go on your favorite Git space (maybe [Github](https://github.com)) and create a **new Git repository**.
2. **Clone** the new repository on your local working space.
3. Create a new `.gitignore` file to manage default behaviour. You should take [gitignore.txt](gitignore.txt) as a starting point then adapt it to your context.

##Install Bower components
###Install Bower
If **Bower** is not yet installed on your system, install it with the command line:
```
npm install bower -g
```

###Install Bower components
The minimum requirements here are jQuery and inuitcss, they are listed in the `bower.json`file. To install them, go to the root of the project with the command line and type:
```
bower install
```

If you need other bower components, first, search for the right name of the component you need then install it:
```
bower search moderni						// will find *Modernizr* packages for example
bower install [component-name] --save-dev	// will install the desired package
bower init									// will update the bower.json file with your additional components (useful for the next installation).
```

##Install the required Node modules
This project uses **[Gulp](http://gulpjs.com)** and some of its sub-packages to function properly. To install them, go into the command line, and in the root of the project type:
```
npm install
```

This command will take the **[package.json](package.json)** file that lists all the modules required and download them with all their dependencies. The included packages are:

* **gulp**,
* **gulp-sass**, to handle Sass code,
* **inuit-shared** to help with inuit,
* **gulp-clean-css** and **gulp-minify-css**, to handle Stylesheets,
* **gulp-concat**, **gulp-minify** and **gulp-uglify** to manipulate Javascript,
* **gulp-rename**, **pump** to handle files,
* **gulp-livereload** and **gulp-sourcemaps** to handle enhance browser experience,
* **gulp-spritesmith** to generate sprites from your individual images.

In order to benefit from the **gulp-libereload** plug-in, you will need to also install the [Livereload](http://livereload.com) Chrome plug-in. It will make Chrome listen to any change signaled by Gulp and thus automatically reload the page you're on.

###Add more Node modules
Feel free to install any other Node module that you think you need:
```
npm install [package-name] --save
```

The *--save* parameter will add the package to the *package.json* file in order to include it in the next global download.

##Set up your local server
When using your local http server, create a domain related to the project:

1. Create a virtual host by editing `apache/conf/extra/httpd-vhosts.conf`:
```apache_conf
<VirtualHost *:80>
     DocumentRoot "C:\wamp\www\the-project-directory\site-root-directory"
     ServerName project-name.local
</VirtualHost>
```
2. Ask your system to catch this domain by editing the `hosts` file (`c:\windows\system32\drivers\etc\`):
```
127.0.0.1 other-project.local
127.0.0.1 project-name.local
```

##File tree
This project uses a default file tree as follows:

- app
	- assets
	- img
	- scripts
	- scss
- public
- vendor
	- scripts
	- styles

###/app
This directory is your **one and only** working directory.

####/app/assets
The content of this directory will simply be copied into the **/public** directory as-is. It can be seen as a mirror of the public directory. Everything you need to put into the public directory and that does not need to be treated by **Gulp** shall be put here.

If you need to find `/public/images/my-image.jpg`, you must have `/app/assets/images/my-image.jpg`. Even if you need to add a file into a directory that is treated by **Gulp** (like the CSS directory: if you need the find `/public/css/images/my-css-image.jpg`, you must have `/app/assets/css/images/my-css-image.jpg`.

So you will often find yourself with something like this:

- app
	- assets
		- css
			- fonts
			- images
		- images
		- includes-html
		- uploads
		- ...

####/app/img/sprites
The content of this directory is all the individual images you wish to compile in one single sprite image. Just put your images here and `gulp sprites:generate` will create or update the sprites image and the related sprites stylesheet.

####/app/scripts
This directory is intended to receive all your javascript files. Everything you put here will be compiled in one single **main.js** that will be copied in **/public/js/main.js**.

###/app/scss
This directory hold all your styling. The entry point is **styles.scss**: it contains imports of the **inuitcss** framework and receives the imports of your own style sheets. **Gulp** will compile everything in one single file copied in **/public/css/styles.css**.

###/public
This directory is the effective website directory, **do not work here!**. Everything in this directory is generated by **Gulp** and thus can be overriden at any time.

###/vendor
This directory receives all the vendor files you wish to include in your code that are **NOT handled by Bower**. All javascripts files put in there will be compiled in one single **vendor.js** that will be copied in **/public/js/vendor.js**. Note that the vendor files handled by **Bower** will also be compiled in the same file but *before* the others.

##Work now!
To launch **Gulp**, just type `gulp` in the command line. This will initiate Gulp and make it automatically update the styles and scripts, generate sprites (if available), reload the browser (if available)...

##Publication
To go live, it's better to use compiled stylesheets and javascript files. To do so, use `gulp prod`. 
