# MVC-Php
Simple MVC in Php


Introduction to MVC

The Model-View-Control (MVC) pattern, originally formulated in the late 1970s, is a software architecture pattern built on the basis of keeping the presentation of data separate from the methods that interact with the data. In theory, a well-developed MVC system should allow a front-end developer and a back-end developer to work on the same system without interfering, sharing, or editing files either party is working on.


 
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/MVC-Process.svg/1200px-MVC-Process.svg.png" width="300">

<b>Model</b>

Database Communication between View and Controller

<b>View</b>

The Show site to the user in this section
For example: fetch information from the model and display in this section

<b>Controller</b>

he final component of the triad is the Controller. Its job is to handle data that the user inputs or submits, and update the Model accordingly. The Controller’s life blood is the user; without user interactions, the Controller has no purpose. It is the only part of the pattern the user should be interacting with.

The all URLs Are defined in this Section
for example : example.com/view/12

### Usage MVC Freamwork Php

1. Create MVC Folder And put the files in the MVC folder
2. Create a Database first with name MVC and Import mvc.sql

And Finally

Run Script in Xampp Or Hosting site

Index URL : 
http://localhost/MVC/

Show in This page :
200
Index View

Show data From Database

http://localhost/mvc/article/show/2

Another URL

http://localhost/mvc/article/404


<b>Note that if the file is not in one of the controller files,then it automatically finds method from  index.php file and if it still can not find it, the it will direct  to 404  page.<b>

for Example 
URl : http://localhost/mvc/page1

page1 method is not inside the controller files

this method Written In mvc\app\controller\index.php:16

```
    public function page1($id=0){
        $this->view->set("id",$id);
        $this->view->render("page1");
    }```
    
as a result , the All URLS or there is in index.php or in controller files 
Take note of the example below

URl : <b>http://localhost/mvc/article/show/2</b>

<b>article</b> is a Controller in mvc\app\controller\

<b>show</b> is a function in mvc\app\controller\article.php

<b>2</b> is a param in mvc\app\controller\article.php:21 - > function show($id=0){ }
----------------------------------

All Links we created in Controller for example















