# CMPE-202 Group Project

## Team Name: Chicken Dinner
## Team Members: 
- **Miguel Covarrubias**
- **Jacky Z. Chen**
- **Maninderjit Singh**
- **Khang Doan**


## XP Core Values By Team Member
- **Simplicity**
    - Miguel Covarrubias
    - Maninderjit Singh
    - Jacky Z. Chen
    - Khang Doan
- **Communication**
    - Maninderjit Singh
    - Jacky Z. Chen
    - Khang Doan
- **Feedback**
    - Miguel Covarrubias
- **Courage**
- **Respect**
    - Maninderjit Singh
    
 #### Maninderjit Singh (group member) - commits
   * Maninderjit's commits won't show in the commit/contributors history, but if you go under commits section at the home of the repository, where all the commits are display with the user names, you can see the commits by 'maninderjits' and 'root', both of those belong to Maninderjit Singh.
   * Basically, Maninderjit Singh worked on the payment API and helped with the creating orders API. 
   
     
## Keeping Track Of Daily Sprints
| May 4th, 2019                                                                                                                                                                                                                                                                                                                                                                                                                                 |                    |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------ |
| What did I work on?                                                                                                                                                                                                                                                                                                                                                                                                                           | Contributor Name   |
| - Research tools that we can use to develop the web application. <br>- Create Github repository for group project: https://github.com/miguelcovarrubias/cmpe-202-group-project<br>- Discussed with the team to design the mysql tables to be used in the application. <br>- Created an initial Spring Application from https://start.spring.io/ that uses mysql. <br>- Signup for AWS Student Account. Amazon needs to review my application. | Miguel Covarrubias |
| - Went over project requirements with the team. <br>- Decided tech stack to implement the project and discussed features that are required to develop a MVP. <br>- Introduced two different stacks that might be relevant: LAMP vs Spring.<br>- Discussed with team members on the database schema and general user interface flow of the application. <br>- Wrote design plans on paper.                                                     | Jacky Z. Chen      |
| - Helped start Slack channel, and the Dropbox/Paper doc.  Also discussed with the group on which technologies to use for the project. Discussed in length about Spring vs PHP, and finally decided with PHP. Decided on the table schemas. Decided on the API’s.                                                                                                                                                                              | Maninderjit        |
| - Discussed with the team over tools and database design.<br>- Looked over benefits and risk for Spring Vs. PHP.                                                                                                                                                                                                                                                                                                                              | Khang Doan         |
| Project Progress Notes                                                                                                                                                                                                                                                                                                                                                                                                                        |                    |
| - Mysql database will be used as data storage.<br>- All the mysql tables have been designed.<br>- The tools to build the web applications are still not defined. <br>- Slack and Github repo is set up.<br>- Dropbox - Google doc setup                                                                                                                                                                                                       |                    |

| May 5th, 2019                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |                    |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------ |
| What did I work on?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Contributor Name   |
| - Research tools that we can use to develop the web application. <br>- Create Github repository for group project: https://github.com/miguelcovarrubias/cmpe-202-group-project<br>- Discussed with the team to design the mysql tables to be used in the application. <br>- Created an initial Spring Application from https://start.spring.io/ that uses mysql. <br>- AWS Student Account was approved.                                                                                                                                                                                                                                     | Miguel Covarrubias |
| - Set up the php starter code. Created/Updated Readme to provide instructions for running the php code.<br>- User authentication API (registration & login) are up running on the server; setting the foundation for future implementations. (PHP starter code)<br>- Implemented Add/View Card API to enable users to add card(s) upon login and integrated sessions to track user login status and prevents user offline interaction with the transaction system (e.g., adding/viewing card when user is not logged in, attempting to register for an account while logged in, etc...) <br>- Attempted to register for AWS student account. | Jacky Z. Chen      |
| - Minor edits<br>- Added the menu.php → later down the line becomes createOrder.php.<br>- Added and updated a linux read_me under cmpe-202-group-project/php_card_starter/ directory on our git-hub repo. File called README_LINUX.md.                                                                                                                                                                                                                                                                                                                                                                                                       | Maninderjit        |
| - Looked over PHP starter code to get acclimated with syntax and website flow.<br>- Locally, set up build and test environment for development.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Khang Doan         |
| Project Progress Notes                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |                    |
| - dbConnection.php, stored database connection info for local MySql instance.<br>- userSession.php was created so that session information could be easily accessed on multiple files, without the need for copy pasting the same code again and again.<br>- Viewing cards now checks whether the user is logged in or not.<br>- Loggin in and registration were close to or pretty much done.<br>- Adding order has been started.                                                                                                                                                                                                           |                    |

| May 6th, 2019                                                                                                                                                                                                                                                                         |                    |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------ |
| What did I work on?                                                                                                                                                                                                                                                                   | Contributor Name   |
| - Learn about AWS. <br>- Spin up a EC2 node to test hosting our application. <br>- Spin up a testing Cluster and Task Definition to run the application as a docker container.                                                                                                        | Miguel Covarrubias |
| - Continue working on refining user authentication and card API. <br>- Updated readme instruction to run php code in macOS.<br>- Proceeded with implementing application using the LAMP stack.                                                                                        | Jacky Z. Chen      |
| - Drop down menu was added in the  menu.php, this table shows the data from the MySql database, things such as beverage_name, price and size, and temperature.<br>- Added a style sheet for menu.php.                                                                                 | Maninderjit        |
| - Worked on inserOrder.php to output orders to the HTML as they are added.<br>- Planned to have dropped down text box to remove unwanted order.                                                                                                                                       | Khang Doan         |
| Project Progress Notes                                                                                                                                                                                                                                                                |                    |
| - We decided to use the LAMP, (PHP and MYSQL) and not the Java Spring to build the web application.<br>- Work was assigned to each member of the team:<br>    - Miguel Covarrubias <br>        - View Profile API<br>        - View Orders API<br>        - Docker and AWS Deployment |                    |

| May 7th, 2019                                                                                                                                                                                            |                    |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------ |
| What did I work on?                                                                                                                                                                                      | Contributor Name   |
| - Create a base docker container for the application and configure it to use Mysql database. <br>- Deploy docker app as a service in AWS.                                                                | Miguel Covarrubias |
| - Added some starter code for implementing purchase API (user experience of adding menu orders to a cart). <br>- Sessions in this API were only partially working; had to troubleshoot and resolve bugs. | Jacky Z. Chen      |
| - Continued working on getting order from menu.php and passing it to the next file which would handle the order creation.                                                                                | Maninderjit        |
| - Adjust formatting and for the output box in insertOrder.php<br>- Planned for using table instead of text box for readability.                                                                          | Khang Doan         |
| Project Progress Notes                                                                                                                                                                                   |                    |
| - Work in progress on payments api.                                                                                                                                                                      |                    |

| May 8th, 2019                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |                    |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------ |
| What did I work on?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Contributor Name   |
| - Modify orders_status table schema since it was wrong. It did not have user_id, is_done and total_price_amount.<br>- Add primary key to beverage_menu table schema to prevent adding beverages with the same names to the menu.<br>- Add primary key to beverage_size_price table schema to prevent adding beverages with the same size to the size menu (small, medium, large).<br>- Created a bash script “init_database.sh” to initialize the database in any environment and keep all tables consistent across. <br>- Bug fixes on the purcharse.php and addCard.php | Miguel Covarrubias |
| - Continued refining card and user authentication APIs. <br>- Played around with purchase and cart.php (allow users to add menu items to a cart and render prices for added items). This feature was only for testing an API, it will not be released to final app officially.<br>- Encountered cascading effects when user select item size; was not able to identify each item uniquely.                                                                                                                                                                                | Jacky Z. Chen      |
| - Continued working on getting order from menu.php and passing it to the next file which would handle the order creation.                                                                                                                                                                                                                                                                                                                                                                                                                                                 | Maninderjit        |
| - added a back button for the insertOrder.php page to help with the UI flow.<br>- experimented with different format for the HTML to accommodate the output from the database.<br>- Found out that an empty table was generated if there’s an empty cart.<br>- Planned to move HTML into the PHP to fix the issue.                                                                                                                                                                                                                                                        | Khang Doan         |
| Project Progress Notes                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |                    |
| - Now, the user can go to the order placement screen after adding a card.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |                    |

| May 9th, 2019                                                                                                                                                                                                                                                                                                                                                                                                                                    |                    |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------ |
| What did I work on?                                                                                                                                                                                                                                                                                                                                                                                                                              | Contributor Name   |
| - Add getOrder.php API as POC to support calls such as http://localhost:8000/getOrder.php?order_id=1.<br>- Create User Dashboard to consolidate the location of user actions. All page de-directs will land to this page.<br>- Add User Dashboard link when the user is in the create order page.                                                                                                                                                | Miguel Covarrubias |
| - Working on removing card functionality.<br>- Thinking of changing view card interface; instead of displaying all the active cards a specific user possess from the database, create a drop down to show those cards - allows user to select any card and do something with it (might be useful for making payments).<br>- Card API is wrapping up, very close to completion. Might consider adding a few more check conditions for edge cases. | Jacky Z. Chen      |
| - Added code to menu.php so that if the required tables for order creation are not in the database, make them.                                                                                                                                                                                                                                                                                                                                   | Maninderjit        |
| - Worked on PHP code to generate and format table to show added items.                                                                                                                                                                                                                                                                                                                                                                           | Khang Doan         |
| Project Progress Notes                                                                                                                                                                                                                                                                                                                                                                                                                           |                    |
| - Refined table creation in the creating an order section of the app.                                                                                                                                                                                                                                                                                                                                                                            |                    |

| May 10th, 2019                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |                    |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------ |
| What did I work on?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Contributor Name   |
| - Finish User Profile API. This will allow users to view their profile. Edit to profile will be added in the future.  <br>- Pull the latest code to deploy in AWS.                                                                                                                                                                                                                                                                                                                                                | Miguel Covarrubias |
| - cardView.php allows user to select any card and it will be identified accordingly. <br>- Remove card was added to enable users to delete selected card of choice. <br>- Fixed logical error in addCard.php where card number is fetched only based on matching card number and code (logically incorrect, since user may add the same card with different code). <br>- Changed session name to reference defined database schema field. (user_id was previously referencing username, but now it points to id). | Jacky Z. Chen      |
| - Added payForOrder.php, .<br>- Made some database modification.<br>- Getting current user’s orders and card info in payForOrders.php and using the to make the payment.                                                                                                                                                                                                                                                                                                                                          | Maninderjit        |
| - Fixed issues with formatting, got view added item up and running.<br>- Removed dead code and unneeded comments to commit to Github.                                                                                                                                                                                                                                                                                                                                                                             | Khang Doan         |
| Project Progress Notes                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |                    |
| - By the end of this day, we could add orders and add more items to those orders, and pay for those orders.                                                                                                                                                                                                                                                                                                                                                                                                       |                    |

| May 11th, 2019                                                                                                                                                                                         |                    |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------ |
| What did I work on?                                                                                                                                                                                    | Contributor Name   |
| - Fix minor bugs in the application. <br>- Pull the latest code to deploy in AWS.<br>- Prepare for the demo using the application hosted in AWS.                                                       | Miguel Covarrubias |
| - Finalized some existing code.<br>- Cleaned up apparent bugs; added checks to prevent edge cases.<br>- Met up with team members at tech showcase to check out projects and rehearse for project demo. | Jacky Z. Chen      |
| - Met up  with group  to prepare for presentation.                                                                                                                                                     | Maninderjit        |
| - Prepared for demo and presentation.<br>- Did final testing of the website to make sure all the website flow is correct.                                                                              | Khang Doan         |
| Project Progress Notes                                                                                                                                                                                 |                    |
| - All major required features are working.<br>- Prepared for the presentation. Link https://docs.google.com/presentation/d/1AMgjKiCdzZ-0KOFrB21L4PbtbVPxjZQ_fUVOdQHqSXs/edit?usp=sharing               |                    |

## 
## App APIs
- Card Api
    - View Cards → viewCards.php
    - Add Card → addCard.php
    - Remove Card → removeCard.php
- Order Api
    - Add Item to Order → insertOrder.php
    - Create Order → createOrder.php
    - View Orders → viewOrders.php
- User Api
    - Register User → register.php
    - Login User → login.php
    - View User Profile → viewProfile.php
    - Logout User → logout.php
- Pay Order Api
    - Paying for Order → payForOrder.php


## Defining MySQL database tables

Database Name: **starbucks**

cards_info

| card_id | card_number | card_code | user_id |  |  |
| ------- | ----------- | --------- | ------- |  |  |
| 1       | 1188273725  | 423       | 1       |  |  |
| 2       | 2938479233  | 531       | 2       |  |  |
| 3       | 8273482734  | 532       | 2       |  |  |

    CREATE TABLE IF NOT EXISTS cards_info (
      card_id int(8) NOT NULL AUTO_INCREMENT,
      card_number int(9) NOT NULL,
      card_code int(3) NOT NULL,
      user_id int(8) NOT NULL,
      PRIMARY KEY (card_id)
    );
    

users_info

| user_id | first_name | last_name   | card_id |
| ------- | ---------- | ----------- | ------- |
| 1       | miguel     | covarrubias | 1       |
| 2       | jack       |             | 3       |

    CREATE TABLE IF NOT EXISTS users_info (
      user_id int(8) NOT NULL AUTO_INCREMENT,
      first_name text NOT NULL,
      last_name text DEFAULT '',
      card_id int(8),
      PRIMARY KEY (user_id)
    );

orders_status

| order_id | user_id | is_done | total_price_amount |
| -------- | ------- | ------- | ------------------ |
| 1        | 1       | yes     | 4                  |
| 2        | 2       | no      | 1                  |



    CREATE TABLE IF NOT EXISTS orders_status (
      order_id int(8) NOT NULL AUTO_INCREMENT,
      user_id int(8) NOT NULL,
      is_done varchar(6) DEFAULT 'false',
      total_price_amount double,
      PRIMARY KEY (order_id)
    );

orders_description

| order_id | beverage_name | price | cup_size | other_options |
| -------- | ------------- | ----- | -------- | ------------- |
| 1        | coffee        | 3     | large    | hot           |
| 1        | tea           | 1     | small    | cold          |
| 2        | coffee        | 1     | small    | cold          |



    CREATE TABLE IF NOT EXISTS orders_description (
      order_id int(8) NOT NULL,
      beverage_name varchar(40) NOT NULL,
      price double,
      cup_size varchar(40),
      other_options varchar(40)
    );

beverage_menu

| beverage_name |  |
| ------------- |  |
| coffee        |  |
| tea           |  |
| frap          |  |

    CREATE TABLE IF NOT EXISTS beverage_menu (
      beverage_name varchar(40) NOT NULL
    );

beverage_size_price

| size   | price |
| ------ | ----- |
| small  | 1     |
| medium | 2     |
| large  | 3     |



    CREATE TABLE IF NOT EXISTS beverage_size_price (
      beverage_size varchar(40) NOT NULL,
      price double NOT NULL,
    );

beverage_options

| name |  |
| ---- |  |
| hot  |  |
| cold |  |

    CREATE TABLE IF NOT EXISTS beverage_options (
      name varchar(40) NOT NULL
    );


## AWS
## Spin up an EC2 Node to host the application:

Public URL: http://ec2-3-92-181-18.compute-1.amazonaws.com/

![](https://paper-attachments.dropbox.com/s_973B7A8D084078F0DDBC65B75A2D7D0660AA6D500A3D30E5F3AFE3727EEA34D2_1557615615091_AWS_EC2.png)

## Amazon Load balancer

**For instance above**

![](https://paper-attachments.dropbox.com/s_973B7A8D084078F0DDBC65B75A2D7D0660AA6D500A3D30E5F3AFE3727EEA34D2_1557630760341_Low_Balnacer.png)

## Amazon RDS

**Mysql instance:** 

![](https://paper-attachments.dropbox.com/s_973B7A8D084078F0DDBC65B75A2D7D0660AA6D500A3D30E5F3AFE3727EEA34D2_1557616347107_AWS_MYSQL.png)


**Deployment Diagram for the above set up:**

![](https://paper-attachments.dropbox.com/s_973B7A8D084078F0DDBC65B75A2D7D0660AA6D500A3D30E5F3AFE3727EEA34D2_1557634346430_EC2_deployment_diagram.png)

## Amazon ECS, Clusters and Task Definitions

Docker Image location: https://cloud.docker.com/repository/docker/miguelcovarrubias/cmpe202
Sample Instance running the container: http://ec2-54-196-18-155.compute-1.amazonaws.com/

![](https://paper-attachments.dropbox.com/s_973B7A8D084078F0DDBC65B75A2D7D0660AA6D500A3D30E5F3AFE3727EEA34D2_1557688596760_docker.png)


Cluster Task Definition For running Instances using the app docker image:

![](https://paper-attachments.dropbox.com/s_973B7A8D084078F0DDBC65B75A2D7D0660AA6D500A3D30E5F3AFE3727EEA34D2_1557688992146_task_docker_1.png)

![](https://paper-attachments.dropbox.com/s_973B7A8D084078F0DDBC65B75A2D7D0660AA6D500A3D30E5F3AFE3727EEA34D2_1557688999104_task_docke_2.png)


**Deployment Diagram for the above set up:**

![](https://paper-attachments.dropbox.com/s_973B7A8D084078F0DDBC65B75A2D7D0660AA6D500A3D30E5F3AFE3727EEA34D2_1557634351911_ECS_deployment_diagram.png)

Website Flow Diagram
![](https://paper-attachments.dropbox.com/s_03126EB1256DC5A852B9225B31A415C1508F6E566AE15750B2C78B6B4BBE2975_1557720360242_image.png)



## Setting up the project form git:
- The project is stored (git cloned) in the following directory:
    - /var/www/html/
    - Here the index.html file is changed to index.php, and it has the following code:
    <?php include('cmpe-202-group-project/home.php'); 
        - Where ‘cmpe-202-group-project’ is the gitcloned folder and the home.php is the newly added home.php file.
        
  
