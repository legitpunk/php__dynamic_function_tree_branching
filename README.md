# php__dynamic_function_tree_branching
Reads through a json file that is indexed with base(36) character system where the output of the previous function dictates which of the next 36 pathways it'll load. It also loads all functions on the fly, as needed, pre process. No functions not used in the "user click input" are loaded into memory, ever. 
Here is an explanantion with images : 

https://legitdeets.com/index.php/2023/11/09/php-dynamic-function-branching/

PHP Dynamic Function Branching (DFB)
2023_11_12
Author : Jonathon Nicholas

Contents

Problem
	PHP loads the entire website script into memory whenever a user clicks on a button.
Solution
	Only load the scripts that pertain to the user’s “click”.

Example
	Elgg has a social network OS engine that loads all scripts pertaining to the website. Standard PHP websites loads all the classes and functions including 
•	User 
•	Database 
•	Landing page
•	Routers
•	Dialogue boxes
•	Css
•	Headers
•	Footers
•	Content
•	Tokens 
•	Sessions
•	Hash functions
•	Composer additions
•	Groups
•	Friends
•	Pages
•	Themes etc
With DFB, the contention is to load the classes that are needed for the user verification, and the functions that extract the parameters of button’s properties. Those classes are : 
•	User 
•	Database 
•	Libsodium2 Decryptor
•	Button properties extractor 
The system decrypts the POST button, from Libsodium2 to an md5 hash. The md5 is then matched to a session variable that contains the button’s properties. 
Note : These md5’s are pre-made each time a button is generated to be loaded onto a page. When a new page is made, and a new view is generated, all the old buttons are discarded, and the session variables that contain those undisplayed buttons are discarded also.
The  button’s properties contain such values as 
•	Md5
•	Button type
•	Content type
•	View type
•	Record assignment
•	Database assignment
•	Table assignment
•	IP assignment
•	Domain assignment
•	Other property types
Using these properties, allows the DFB Framework to navigate the branching system.
For the above example, might have the following properties : 
•	Button type 		= 	view
•	Content type		=	text post
•	View type			=	resource (full enlarged view of a post)
•	Record assignment		=	an md5 hash
•	Table assignment		=	an md5 hash
•	Database assignment	=	an md5 hash
•	IP assignment		=	127.0.0.1
•	Domain assignment		=	domain.com


DFB only loads the functions pertaining to that button. For example : 
•	Get.php resource (gets from assigned domain, IP, database, table, and record)
o	Templates.php
	Text_post.php
•	Resource.php
o	Echo_scripts.php
This example only loads 5 functions into memory on the fly as they’re needed. No other scripts are loaded. Of course, this is an over-simplified example. One of the versions of the framework looks like this :
 
This JSON file is written in a way so that the index numbers assigned to each function enable the JSON_Commands.php to only use the functions that the button’s properties designate.
So for example, when the system reads the “Templates.php” function, and the button’s properties are of type “text_post.php” and “enlarged_view.php”, it’ll load those functions instead of any others like “video_post.php” or “audio_post.php” or “dialogue_box.php” or “settings_page.php”. 


For example, instead of : 
•	Get.php resource (gets from assigned domain, IP, database, table, and record)
o	Templates.php
	Text_post.php
	Video_post.php
	Audio_post.php
	Dialogue_post.php
	Settings.php
	Echo_scripts.php
DFB loads
•	Get.php resource (gets from assigned domain, IP, database, table, and record)
o	Templates.php
	Text_post.php
An example of JSON_Commands_v6.php
 

Jonathon Nicholas
Legitpunk.com@gmail.com
https://legitdeets.com
Jonathan Nicholas | LinkedIn
	
