# Framework Specification

## Apache Configurations
RewriteEngine On<br/>
DocumentRoot "/wayi-mvc-framework/public"<br/>
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]

## MVC Framework

### File Paths
Model Path: /wayi-mvc-framework/app/models<br/>
View Path: /wayi-mvc-framework/app/views<br/>
Controller Path: /wayi-mvc-framework/app/controllers

### Naming Rules
Controller: XxxxController.php<br/>
Model: Xxxx.php

### Rules
There is at least on method in the controller


### Test
URL: http://localhost/ or http://www.ying.com/home/index<br/>
Result: A table of all posts will be shown on the page.
