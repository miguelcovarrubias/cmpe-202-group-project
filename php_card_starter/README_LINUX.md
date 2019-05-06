# This is for running the code on linux

## I have tested this on Debian 9, and Ubuntu 18.04 (these are different distributions/flavors of linux), and the following steps work on both

* Install apache, php, and mysql on your linux distribution.
* After installing apache, open your browser and go to localhost, it should show a page with a bunch of apache stuff on it.
* Now, after everything has been installed do the following.
	* Go to the following directory: /var/www/html/
	* There should be a file called 'index.html' here, rename that file to or replace that file with the another with the name 'index.php'.
	* If you replaced the old name with new, replace the previous code, remove everything, with the following code:
		<?php	include('cmpe-202-group-project/home.php'); 
	* The content of the include statement above might be specific to your setup, meaning:
		* I cloned the git repository, which is named 'cmpe-202-group-project', inside the /var/www/html/ directory, which is why inorder to run the home.php file I had to go inside the 'cmpe-202-group-project' folder.
		* Another thing that should be mentioned is that I running this code from with in the git repo folder, I am copying any of the files outside to another location, so the paths that I am giving to the other files are pretty much how they are inside the git foler, example:
			* If I need to go to register.php from index.php, I would have to give cmpe-202-group-project/php_card_starter/register.php.
			* This will be relative to how another might have their files setup.
	* If all these things are done, all you would need to do is go to localhost on your browser, and index.php should run.
	* Currently the only links that been added are 'sign up' and 'login'.
		* But you could still access other pages, by just giving their paths in the url, example:
			* localhost is where index.php is, so if you need to get to menu.php, which is inside the php_card_starter folder, which is inside the cmpe-202-group-project folder, you would type the following path in the url, localhost/cmpe-202-group-project/php_card_starter/menu.php, and this would load the menu.php on that page. 
