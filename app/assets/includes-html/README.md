#A little bit of help...
About:

* Medias ([audio](#audio), [video](#video), [YouTube](#youtube)),
* Socials ([Facebook](#facebook), [Twitter](#twitter), [Instagram](#instagram)),
* Others ([Google Analytics](#google-analytics))

##Medias

###Audio HTML5
How to implement that brand new `<audio>` tag? It's pretty straight forward with the provided include...

| Parameter  	| Values                                                 	| Description                                                                                                                                                        	|
|------------	|--------------------------------------------------------	|--------------------------------------------------------------------------------------------------------------------------------------------------------------------	|
| controls   	| **false**, true                                        	| Wether or not to show the control bar...                                                                                                                           	|
| autoplay   	| **false**, true                                        	| Wether the sound must start as soon as possible or wait for the user demand                                                                                        	|
| preload    	| **false**, true                                        	| If autoplay is off, does the browser shall load the media?                                                                                                         	|
| loop       	| **false**, true                                        	| Shall the browser loop the sound as it ends?                                                                                                                       	|
| alt        	| **Default text** set in the translation file, any text 	| If set, the given text (or blank text) will display as an alternate text. If not set, defaults to `/app/assets/lng-LANGUAGE/translations.php#$audio__unsupported`  	|
| src['mp3'] 	| any MP3 source                                         	| If supported, the file that will be played                                                                                                                         	|
| src['ogg'] 	| any OGG source                                         	| If supported, the file that will be played                                                                                                                         	|
| src['wav'] 	| any WAV source                                         	| If supported, the file that will be played                                                                                                                         	|

###Video HTML5
How to implement that brand new `<video>` tag? It's pretty straight forward with the provided include...

This tag is not supported by every browser and every browser does not support the same video formats so: this include allows you to specify different video sources and a Flash alternative.  
For an up to date list of [supported formats](https://developer.mozilla.org/en-US/docs/Web/HTML/Supported_media_formats).  
Also keep in mind that each browser has its own way to implement that tag so some may behave differently (autoplay, poster, etc.)

| Parameter        	| Values                                                 	| Description                                                                                                                                                        	|
|------------------	|--------------------------------------------------------	|--------------------------------------------------------------------------------------------------------------------------------------------------------------------	|
| width            	| **null**, any number                                   	| Sets the width of the video. If empty, the initial width of the video is used                                                                                      	|
| height           	| **null**, any number                                   	| Sets the height of the video. If empty, the initial height of the video is used                                                                                    	|
| controls         	| **false**, true                                        	| Wether or not to show the control bar...                                                                                                                           	|
| autoplay         	| **false**, true                                        	| Wether the video must start as soon as possible or wait for the user demand                                                                                        	|
| preload          	| **false**, true                                        	| If autoplay is off, does the browser shall load the video?                                                                                                         	|
| loop             	| **false**, true                                        	| Shall the browser loop the video as it ends?                                                                                                                       	|
| mute             	| **false**, true                                        	| Shall the sound be muted?                                                                                                                                          	|
| poster           	| **empty**, any path to an image                        	| The path to the image that is shown before playing the video                                                                                                       	|
| alt              	| **Default text** set in the translation file, any text 	| If set, the given text (or blank text) will display as an alternate text. If not set, defaults to `/app/assets/lng-LANGUAGE/translations.php#$audio__unsupported`  	|
| src['mp4']       	| any MP4 source                                         	| If supported, the file that will be played                                                                                                                         	|
| src['ogg']       	| any OGG source                                         	| If supported, the file that will be played                                                                                                                         	|
| src['webm']      	| any WEBM source                                        	| If supported, the file that will be played                                                                                                                         	|
| playerswf        	| any path to a SWF video player                         	| If the browser doesn't support HTML5 video, il will try to fallback on a Flash video player. The MP4 video source will be played then                              	|
| playerBackground 	| **transparent**, any hexadecimal color code            	| Sets the background of the Flash player                                                                                                                            	|

###Youtube
If you must display videos that are hosted at YouTube, use the dedicated include.

YouTube proposes two methods to insert a video: through its API (asynchronously), or with an `<iframe>`. The service differs a bit between those two methods:

* **API**:
	* No handling of the privacy feature,
	* Fullscreen feature is part of the controls.
* **iframe**:
	* Autoplay doesn't seem to work (to date),

The include provided let's you choose between the method you prefer, so just embed the file, set up your parameters and enjoy. The one and only required parameter is the **id** of the video.

| Parameter  	| Values               	| Description                                                                                                                                                                      	|
|------------	|----------------------	|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	|
| mode       	| **api**, iframe      	| Choose your method of integration (async, sync)                                                                                                                                  	|
| width      	| any number           	| The width of the embedded video.<br>**api mode**: no setting leads to initial width of the video or relative width if height is set up.<br>**iframe mode**: no setting leads to 200px   	|
| height     	| any number           	| The height of the embedded video.<br>**api mode**: no setting leads to initial height of the video or relative height if width is set up.<br>**iframe mode**: no setting leads to 113px 	|
| controls   	| **true**, false      	| Wether or not to show the controls of the video...                                                                                                                               	|
| title      	| **true**, false      	| Is the title and sharing visible before playing the video?                                                                                                                       	|
| suggested  	| **false**, true      	| Do you need related videos proposed at the end of the video?                                                                                                                     	|
| autoplay   	| **false**, true      	| Wether the video must start as soon as possible or wait for the user demand.<br>Seems to be disabled in **iframe mode**                                                             	|
| privacy    	| **true**, false      	| Is YouTube authorized to place cookies before the video is being played?<br>Available in **iframe mode** only                                                                       	|
| fullscreen 	| **true**, false      	| Do you allow the user to put the video in fullscreen mode?                                                                                                                       	|
| id         	| any Youtube video id 	| **REQUIRED!!** The unique id representing the video at YouTube                                                                                                                   	|

##Socials

###Facebook
The facebook API changes often so if this help file is out of date, please be forgiving, and update it!

To implement one of these services, allways insert the `socials__facebook--mandatory-tools.php` into the top body of your page or it will never work. Each service can work properly without any parameter but the **appId**. Only one *mandatory-tools* insertion is required per page no matter how much services you insert afterwards. Each service can have its own parameters even in the same page. The only things in common will be the **appId** and the **language** but that shouldn't be a problem.

The **appId** must be inserted into `/app/assets/config.php#$socials['facebook']`.  
It is given by Facebook to registered developpers to identify their app. Thus you shall register as a developper to Facebook, and then [declare your app](https://developers.facebook.com/apps) to get the key.

The Facebook services available:

* [Like button](#like),
* [Share button](#share),
* [Comments block](#comments)

####Like button
The **Like button** is the quickest way for people to share content with their friends.  
A single click on the Like button will 'like' pieces of content on the web and share them on Facebook.  
You can also display a Share button next to the Like button to let people add a personal message and customize who they share with.

| Parameter 	| Values                                                           	| Description                                                                                                                                    	|
|-----------	|------------------------------------------------------------------	|------------------------------------------------------------------------------------------------------------------------------------------------	|
| action    	| **like**, recommend                                              	| The term that will be displayed                                                                                                                	|
| url       	| **the current URL if left empty**, any URL                       	| The URL that will be "liked" or "recommended"                                                                                                  	|
| layout    	| **standard**, buton, button_count, box_count                     	| The type of display, try them to see the differences                                                                                           	|
| width     	| **450**, any number                                              	| This works only if the layout is set to "**standard**". The minimum width is 225. Note that height is 35px, 80px with **faces** set to *true*  	|
| faces     	| **false**, true                                                  	| Shall it display the faces of those you liked the page?                                                                                        	|
| font      	| **lucida grande**, arial, segoeui, tahoma, trebuchet ms, verdana 	| The font used for text                                                                                                                         	|
| share     	| **false**, true                                                  	| Shall it also display a share button                                                                                                           	|
| color     	| **light**, dark                                                  	| The general theme of the display. "Dark" reads better on dark backgrounds                                                                      	|

Examples:

* Default parameters:  
![](/_documents/readme-components/socials__facebook--like-btn--1.png)

* Customized 1:  
![](/_documents/readme-components/socials__facebook--like-btn--2.png)
```
$fbLocalData = array(
	'action' => 'recommend',
	'url' => 'http://www.yahoo.fr',
	'layout' => 'standard',
	'width' => 150,
	'faces' => 'true',
	'font' => 'segoe ui',
	'share' => 'true'
);
```
* Customized 2:  
![](/_documents/readme-components/socials__facebook--like-btn--3.png)
```
$fbLocalData = array(
	'action' => 'recommend',
	'url' => 'http://www.yahoo.fr',
	'layout' => 'button_count',
	'faces' => 'true',
	'font' => 'segoe ui',
	'share' => 'true',
	'color' => 'dark'
);
```


####Share button
The **Share button** lets people add a personalized message to links before sharing on their timeline, in groups, or to their friends via a Facebook Message.

| Parameter 	| Values                                                           	| Description                                                                	|
|-----------	|------------------------------------------------------------------	|----------------------------------------------------------------------------	|
| url       	| **the current URL if left empty**, any URL                       	| The URL that will be shared                                                	|
| layout    	| **icon_link**, icon, link, button, button_count, box_count       	| The type of display, try them to see the differences                       	|
| font      	| **lucida grande**, arial, segoeui, tahoma, trebuchet ms, verdana 	| The font used for text                                                     	|
| color     	| **light**, dark                                                  	| The general theme of the display. "Dark" reads better on dark backgrounds  	|

Examples:

* Default parameters:  
![](/_documents/readme-components/socials__facebook--share-btn--1.png)

* Customized 1:  
![](/_documents/readme-components/socials__facebook--share-btn--2.png)
```
$fbLocalData = array(
	'url' => 'http://www.yahoo.fr',
	'layout' => 'button_count',
	'font' => 'tahoma',
	'color' => 'light'
);
```
* Customized 2:  
![](/_documents/readme-components/socials__facebook--share-btn--3.png)
```
$fbLocalData = array(
	'url' => 'http://www.yahoo.fr',
	'layout' => 'link',
	'font' => 'arial',
	'color' => 'dark'
);
```

####Comments block
The **Comments plugin** lets people comment on content on your site using their Facebook account.  
If people wish to they can share this activity to their friends and friends of friends in News Feed as well.  
It also contains built-in moderation tools and special social relevance ranking.

| Parameter   	| Values                                                           	| Description                                                                	|
|-------------	|------------------------------------------------------------------	|----------------------------------------------------------------------------	|
| url         	| **the current URL if left empty**, any URL                       	| The URL that will be shared                                                	|
| numberPosts 	| **5**, any number                                                	| The number of posts to display                                             	|
| count       	| **true**, false                                                  	| Display the number of comments (outside the main block)                    	|
| order       	| **social**, time, reverse_time                                   	| The order of display of the comments                                       	|
| width       	| **550**, any number                                              	| The width of the block. Warning, content may overflow                      	|
| font        	| **lucida grande**, arial, segoeui, tahoma, trebuchet ms, verdana 	| The font used for text                                                     	|
| color       	| **light**, dark                                                  	| The general theme of the display. "Dark" reads better on dark backgrounds  	|

Examples:

* Default parameters:  
![](/_documents/readme-components/socials__facebook--comments-block--1.png)

* Customized 1:  
![](/_documents/readme-components/socials__facebook--comments-block--2.png)
```
$fbLocalData = array(
	'url' => 'http://www.yahoo.fr',
	'numberPosts' => 2,
	'count' => true,
	'order' => 'time',
	'width' => 300,
	'font' => 'tahoma',
	'color' => 'light'
);
```
* Customized 2:  
![](/_documents/readme-components/socials__facebook--comments-block--3.png)
```
$fbLocalData = array(
	'url' => 'http://www.yahoo.fr',
	'numberPosts' => 2,
	'count' => false,
	'width' => 470,
	'font' => 'arial',
	'color' => 'dark'
);
```

###Twitter
To implement one of these services, always insert the `socials__twitter--mandatory-tools.php` into the top body of your page or it will never work. Most of the parameters are not mandatory. Only one *mandatory-tools* insertion is required per page no matter how much services you insert afterwards. Each service can have its own parameters even in the same page.

The Twitter services available:

* [Tweet button](#tweet),
* [Follow button](#follow),
* [Timeline](#timeline)

####Tweet button
The Tweet button is a small button displayed on your website to help viewers easily share your content on Twitter. No parameter is mandatory. But the following parameters are available:

| Parameter | Values                                  | Description                                                                                |
|-----------|-----------------------------------------|--------------------------------------------------------------------------------------------|
| text      | any text to prefill the tweet           | Defaults to the title of the current page                                                  |
| url       | any URL                                 | Defaults to the current URL of the page                                                    |
| hashtags  | any list of terms                       | These terms, comma separated will be treated as individual hashtags, don't put the # signs |
| via       | any Twitter screen-name                 | The screen name will be treated as a dynamic Twitter account (clickable and referred)      |
| size      | large                                   | Use this to enlarge the initial button (20px => 28px in height)                            |
| alignment | **left**, right                         | This makes the button float in the set direction                                           |
| count     | **NULL**, left, vertical                | Leaving empty displays the number of tweets, "none" hides the counter, "vertical" puts it on top of the button |
| lang      | **en**, any valid language short string | Localises the display                                                                      |
| dnt       | **false**, true                         |                                                                                            |

####Follow button
The Follow button is a small button displayed on your websites to help users easily follow a Twitter account.

The only required parameter is the **screen-name**. Note that it's also used by the **Timeline**.  
It must be inserted into `/app/assets/config.php#$twitter`.  
It is Twitter the account name. Thus you shall just open an account at Twitter to get it (in the end it must be the client's account!).

| Parameter        | Values                                  | Description                                                                                                    |
|------------------|-----------------------------------------|----------------------------------------------------------------------------------------------------------------|
| screen-name      | any Twitter screen-name                 | **REQUIRED!!** Indicates the Twitter account to follow.                                                        |
| size             | large                                   | Use this to enlarge the initial button (20px => 28px in height)                                                |
| show-count       | **NULL**, left, vertical                | Leaving empty displays the number of tweets, "none" hides the counter, "vertical" puts it on top of the button |
| show-screen-name | **true**, false                         | Whether to display the screen-name or not                                                                      |
| lang             | **en**, any valid language short string | Localises the display                                                                                          |
| dnt              | **false**, true                         | Disables the "Do Not Track" mode                                                                               |

####Timeline
Embedded timelines are an easy way to embed multiple Tweets on your website in a compact, single-column view.  
Display the latest Tweets from a single Twitter account, multiple accounts, or tap into the worldwide conversation around a topic grouped in a search result.

There are two required parameters for this service: the **screen-name** and a **widget-id**.

Both must be inserted into `/app/assets/config.php#$twitter`. Note that the **screen-name** is also used by the **Follow button**.  
The **screen-name** is Twitter the account name. Thus you shall just open an account at Twitter to get it (in the end it must be the client's account!).  
The **widget-id** is generated online:

* Connect to the Twitter account (yours or in the end the client's account),
* Go to "[https://twitter.com/settings/widgets/new](https://twitter.com/settings/widgets/new)",
* Click the *Create a widget* button,
* Look into the source code provided under the presentation and copy the value of the "*data-widget-id*" attribute.

| Parameter   | Values                                  | Description                                                                                                 |
|-------------|-----------------------------------------|-------------------------------------------------------------------------------------------------------------|
| screen-name | any Twitter screen-name                 | **REQUIRED!!** Indicates the Twitter account to follow                                                      |
| widget-id   | the widget id generated online          | **REQUIRED!!** Go online to generate this id                                                                |
| width       | any number                              | Defaults to 520, shall be between 250 and 550px                                                             |
| height      | any number                              | Defaults to 600                                                                                             |
| alignment   | **left**, center, right                 | Aligns the whole timeline. This only works when set from the online generator                               |
| theme       | **light**, dark                         | Changes the background and colors of the timeline, for light or dark environments                           |
| link-color  | any hexadecimal color code              | Defaults to #0084ba for light theme and #87c2ed for dark theme                                              |
| cards       | **visible**, hidden                     | Showw or hide automatically embedded in pages in tweets. This only works when set from the online generator |
| noheader    | **false**, true                         | Whether to hide the header of the timeline                                                                  |
| nofooter    | **false**, true                         | Whether to hide the footer of the timeline                                                                  |
| noborders   | **false**, true                         | Whether to hide the borders of the timeline                                                                 |
| noscrollbar | **false**, true                         | Whether to hide the vertical scrollbar of the timeline. Doesn't deactivates the scroll anyway               |
| transparent | **false**, true                         |                                                                                                             |
| lang        | **en**, any valid language short string | Localises the display                                                                                       |
| dnt         | **false**, true                         | Disables the "Do Not Track" mode                                                                            |

###Instagram
To implement this service, always insert the `socials__instagram--mandatory-tools.php` at the end of the body of your page or it will never work. The *API* comes without any display functionality so you will have to handle it. The principle is to call Instagram API through AJAX and to catch a JSON file in return containing all the data related to the pictures. Then, do whatever you want to display the data, this module only proposes a simple implementation. To modify the display, edit `/app/scripts/functionals/function.js#FIND_INSTAGRAM`.

There are two different contents you can retrieve:

* **Username flow**: you will only need the targetted **username**,
* **Tag flow**: you will of course need that *tag* but also to get registered at Instagram for a *user* and an *application*:
	1. [Register at Instagram](https://instagram.com/accounts/login/),
	2. Go [Manage Clients](https://instagram.com/developer/clients/manage/) and **Register a New Client**: give a name to your application (maybe the name of your client), put FullSix url as website URL and Redirect URL and uncheck the *Disable implicit OAuth* on the *Security* panel.  
	This will give you a **client\_id** and a **client\_secret**.  
	The **client_id** shall be inserted here: `/app/assets/config.php#$instagram`.

####Username flow
This consists of retrieving the pictures posted by a specific user. You will always get the 20 last pictures.

| Parameter 	| Values                 	| Description                                                       	|
|-----------	|------------------------	|-------------------------------------------------------------------	|
| type      	| **username**, tagname  	| **REQUIRED!!** This chooses between the two different flows       	|
| username  	| Any Instagram username 	| **REQUIRED!!** The username from who you want to see the pictures 	|

####Tagname flow
This consists of retrieving the pictures holding a specific tag. This requires to be registered and to create an *application*.

| Parameter 	| Values                	| Description                                                                     	|
|-----------	|-----------------------	|---------------------------------------------------------------------------------	|
| type      	| **tagname**, username 	| **REQUIRED!!** This chooses between the two different flows                     	|
| client_id 	| Any client_id         	| **REQUIRED!!** This is generated by the **ManageClients** function on Instagram 	|
| tagname   	| Any tag               	| **REQUIRED!!** The tag of the pictures yyou want to see                         	|
| count     	| **20**, 1 to 20       	|                                                                                 	|

##Others

###Google Analytics
[Analytics.js](http://www.google.com/analytics) is a JavaScript library for measuring how users interact with your website.

There are two mandatory parameters: the analytics' URL, and the UA (web site identification).  
The **URL** and the **UA** must be inserted into `/app/assets/config.php#$googleAnalytics`.  
The **UA** is given by Google to registered websites to identify themselves. Thus you shall register the website to Google Analytics to get it.

| Parameter  	| Values                                                     	| Description                                               	|
|------------	|------------------------------------------------------------	|-----------------------------------------------------------	|
| complement 	| array of `array('name' => 'theName', value => 'theValue')` 	| Insert an array for each key/value pair of data you need. 	|
