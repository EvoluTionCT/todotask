# Todotask

## API Documents

### Slim Framework
![slim-discourse-logo](https://cloud.githubusercontent.com/assets/11935635/26027803/e22cf118-383e-11e7-95d6-fca147786f84.png)

Slim Framework is php framework use to develop web application or service ,for api it useful help to develop because it's fast , easy and support mostly of systems. by it can connect to system
or database use "HTTP resource" to help  
Why choose ["Slim-Framework"](https://www.slimframework.com/),because i will research information about restful-api work with php so many people or developers review it and
use to working with Resful or Web Service  I think Slim-Framework it helps develop or research with restful-api      



### Composer
![logo-composer-transparent](https://cloud.githubusercontent.com/assets/11935635/26027945/50b43aa4-3841-11e7-9081-1a6832754459.png)

[Composer](https://getcomposer.org/) is tool help for manage package for php , it can work with php framework because PHP framework doesn't as work in system so composer help manage package from other framework  


### Xampp
![xampp-logo](https://cloud.githubusercontent.com/assets/11935635/26028016/646b76e2-3842-11e7-85ef-2e9256385758.png)

[Xampp](https://www.apachefriends.org/index.html) is apache web server it simulates for develop or test script or website by it doesn't connect internet and no cost. Xampp will have with Apache,MySQL,Filezilla,Mercury,Tommcat
In API Assignment I use Apache and MySQL work it

### RestEasy
![restez](https://cloud.githubusercontent.com/assets/11935635/26028118/1841d390-3844-11e7-97ad-842567da17f1.PNG)
RestEasy is a tool help to developers who perform RESTful API calls against third party services. RestEasy is plug-in in Google Chrome

### Other resources
* [RESTful API With PHP & MySQL](https://youtu.be/DHUxnUX7Y2Y)
* [Creating a simple REST API in PHP](https://www.leaseweb.com/labs/2015/10/creating-a-simple-rest-api-in-php/)
* [ทดลองสร้าง RESTful services โดยใช้ Slim PHP Framework](http://www.siamhttp.com/site/article/create-restful-services-using-slim-php.html)


## Setup Instruction

### Xampp

![ezgif com-video-to-gif 1](https://cloud.githubusercontent.com/assets/11935635/26028623/a77b88c6-384e-11e7-8e54-51a32134bdb1.gif)
  * Installation Xampp
    - Select path
    - Press next button
    - Select tools installation
    - Press next button
    - Select on open website bitmap for xampp
    - Press next button
    - Finish installation

![xampp change port](https://cloud.githubusercontent.com/assets/11935635/26028650/4ff93f0c-384f-11e7-90b6-b3f11cb3c100.PNG)
  * Change Port 80 to 8888 because port 80 is same with VMWorksation if i don't change, it can't open or start apache and mysql

### Composer
![composer_install](https://cloud.githubusercontent.com/assets/11935635/26028739/9cba8002-3850-11e7-8a8a-9fac0c0eaf45.gif)
  * Installation Composer
    - Select path of php and find php.exe in xampp
    - Press next button
    - Select or not use a proxy server (i am choose "NO")
    - Press next button
    - Wait for installation
    - Finish

### RestEasy    
![resteasy](https://cloud.githubusercontent.com/assets/11935635/26028865/a5a2abb6-3852-11e7-9398-8e6ea5c465e6.gif)
  * Installation RestEasy
    - Search RestEasy in google chrome
    - Get extension RestEasy
    - Wait for installation
    - Open RestEasy to Run

#### Example of RestEasy
  * GET tasks  
![get data](https://cloud.githubusercontent.com/assets/11935635/26029032/20a37f0e-3856-11e7-9b66-711c93bc7724.gif)




### Slim-Framwork
![slim](https://cloud.githubusercontent.com/assets/11935635/26028963/728541ec-3854-11e7-9722-6a2f12c63b12.gif)
  * Installation Slim-Framework
    - Select destination path to installation
    - Right click and select on windows powershell
    - input "composer require slim/slim "^3.0"" in windows powershell and enter
    - wait for installation
    - if success check folder and find composer.json
    - open composter.json
    ![composer json](https://cloud.githubusercontent.com/assets/11935635/26028998/fb906a8e-3854-11e7-9c67-72a95bc19cc1.PNG)
    - Require the Composer autoloader into your PHP script, and you are ready to start using Slim. "<?php
require 'vendor/autoload.php';"
    - Finish

## Prerequisites

   - PHP 7.1.2 or above
   - Slim Framwork 3.0
   - RestEasy 1.2.1
   - Composer 1.4.1
   - Xampp support PHP 7.1.2 or above
