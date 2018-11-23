<?php
    $con = mysqli_connect("localhost","root","", "p_l_m");
    
    function QueryCreator($Query, $con) {
        $query=mysqli_query($con, $Query);
        return $query;
    }