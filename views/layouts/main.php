<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ABFX test MVC</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="screen" />
	<link rel="stylesheet" href="/assets/css/jquery.treeview.css">
	<link rel="stylesheet" type="text/css" href="/assets/datepick/jquery.datepick.css"> 
	<link href="/assets/css/jquery.gridly.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/assets/js/jquery-1.12.2.min.js"></script>
	<script type="text/javascript" src="/assets/datepick/jquery.plugin.js"></script> 
	<script type="text/javascript" src="/assets/datepick/jquery.datepick.js"></script>		
	
	<script type="text/javascript" src="/assets/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.treeview.js"></script>	
	<script src="/assets/js/jquery.gridly.js" type="text/javascript"></script>	
	<script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>        	
	<script type="text/javascript" src="/assets/js/main.js"></script>
</head>

<body>
<div id="main_container">
	<div id="header">
    	<div id="logo"><a href="home.html"><img src="/assets/images/logo.png" alt="" title="" border="0" /></a></div>
    
        <div id="menu">
            <ul>                                              
                <li><a class="current" href="/" title="">Categories</a></li>
                <li class="divider"></li>
                <li><a href="/hospital" title="">Hospital</a></li>
                <li class="divider"></li>
                <li><a href="/drag" title="">Drag & Drop</a></li>
                <li class="divider"></li>
                <li><a href="/validation" title="">Validation</a></li>
            </ul>
        </div>    
    </div>
    
    
    <div id="middle_box">
    </div>
    
    <div id="main_content">
    
 	<?php include ($contentPage);?>	           
            
            
        <div class="clear"></div>    
    </div>     
            
            
    


</div>
</body>
</html>