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
Model: XxxxModel.php

### Rules
There is at least on method in the controller


### Test
URL: http://localhost/<br/>
Result: Welcome to WaYi MVC Framework!<br/>
URL: http://localhost/home/index/wayi<br/>
Result: Welcome to WaYi MVC Framework! Hello wayi!
