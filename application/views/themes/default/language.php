<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Choose your Language</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
@import url("http://netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css");
 body {
    margin:20px;
}
.jumbotron {
    background-color: #563d7c;
    color:#fff;
}
.drop-shadow {
    -webkit-box-shadow: 0 0 5px 2px rgba(0, 0, 0, .5);
    box-shadow: 0 0 5px 2px rgba(0, 0, 0, .5);
    border-radius:5px;
}
.container.drop-shadow {
    padding-left:0;
    padding-right:0;
}
</style>
    </head>
    <body>
    <div class="container">
    <div class="row">
        
        <div class="col-xs-6">
            <a href="<?php echo BASE_URI ?>Welcome/en">English</a>
        </div>
        <div class="col-xs-6">
            <a href="<?php echo BASE_URI ?>Welcome/ar">Arabic</a>
        </div>
    </div>
</div>
    </body>
</html>
