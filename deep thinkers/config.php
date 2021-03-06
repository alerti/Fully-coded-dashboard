<?php


    session_start();




    /**

     * config.php

     *

     *

     * Configures pages.

     */



    // display errors, warnings, and notices

    ini_set("display_errors", true);

    error_reporting(E_ALL);



    // requirements

    require("includes/constants.php");

    require("includes/functions.php");




    // require authentication for most pages

    if (!preg_match("{(?:login|logout|register)\.php$}", $_SERVER["PHP_SELF"]))

    {

        if (empty($_SESSION["id_super"]))

        {

            redirect("login.php");

        }

    }

?>