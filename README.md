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
<table>
    <tbody>
        <tr>
            <th>Created at</th>
            <th>Update at</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        <tr>
            <td>2019-05-21 17:00:00</td>
            <td>2019-05-21 17:00:00</td>
            <td>Post001</td>
            <td>PostContent001</td>
        </tr>
        <tr>
            <td>2019-05-21 17:00:00</td>
            <td>2019-05-21 17:00:00</td>
            <td>Post002</td>
            <td>PostContent002</td>
        </tr>
        <tr>
            <td>2019-05-21 17:00:00</td>
            <td>2019-05-21 17:00:00</td>
            <td>Post003</td>
            <td>PostContent003</td>
        </tr>
        <tr>
            <td>2019-05-21 17:00:00</td>
            <td>2019-05-21 17:00:00</td>
            <td>Post004</td>
            <td>PostContent004</td>
        </tr>
        <tr>
            <td>2019-05-21 17:00:00</td>
            <td>2019-05-21 17:00:00</td>
            <td>Post005</td>
            <td>PostContent005</td>
        </tr>
    </tbody>
</table>
