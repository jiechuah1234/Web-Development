<?php

/* Configuration File */

class Config
{
    // Database Connection
    public static $db_host      = 'localhost';
    public static $db_id        = 'root';
    public static $db_pw        = '';
    public static $db_name      = 'login';
    
    // Logo File Location
    public static $logo_path    = 'path here';
    
    // Table Name and Column for Insert
    public static $tb_name      = 'items';
    public static $col_name          = array ('item','type','image_name');
    
    // Title of Modal
    public static $modal_title  = 'Add item';
    
    // Global Text input limit
    public static $max_lg_limit = 100;
    
    // Image Path Save
    public static $Save_to      = 'imagefile/';
    
    public static $Return_to    = 'http://localhost/startbootstrap-business-casual-gh-pages';
    
}