<body>
<div id="container">
	
    <div id="header">
    <ul id="logo"><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>image/logo.png" alt="logo" /></a></ul>
	
    	<ul id="nav">
        <li><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>image/nav-home.png" alt="Home" /></a></li>
        <li><a href="<?php echo base_url(); ?>products"><img src="<?php echo base_url(); ?>image/nav-product.png" alt="Product" /></a></li>
        <li><a href="<?php echo base_url(); ?>articles"><img src="<?php echo base_url(); ?>image/nav-article.png" alt="Article" /></a></li>
        <li><a href="<?php echo base_url(); ?>about"><img src="<?php echo base_url(); ?>image/nav-about.png" alt="About Us" /></a></li>
    	</ul>
        
        <form> 
        	<input type="text" placeholder="Search..." required="required" />
            <a href="<?php echo base_url(); ?>search"><input type="button" value="Search" /></a>
        </form>
        
	</div> <!--end div header-->