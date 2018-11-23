<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Css.css">
    <script src="javascript.js"></script>
</head>
<body>
    <div id="notebooks" ng-app="notebooks" ng-controller="NotebookListCtrl">
        Lista de servidores
        <ul id="notebook_ul">
            <?php
                include("server_list.php");
            ?>