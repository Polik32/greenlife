<style>
	body{
		margin:0;
	}
	.wrapper-error{
		position: relative;
		background:#e9edb8;
		height:100vh;
		overflow: hidden;
	}
	
	.logo-img{
		width:20%;
	}
	
	.center-img{
		margin: auto;
  		position: absolute;
  		top: 50px;
		left: 0;
		bottom: 0;
		right: 0;
		opacity:0.4;
	}
	
	.bottom-img{
		position: absolute;
 		bottom: 0;
        width: 100%;
	}
	.error{
		position:relative;
		text-align: center;
		z-index:1001;
		max-width:1024px;
		margin:0 auto;
	 }
	
	h1{
		 font-family: "Open Sans", sans-serif;
		 font-size: 32px;
		 line-height: 1.5;
		 color: #434242;
	}
	
	.error p{
		 font-family: "Open Sans", sans-serif;
		 font-size: 18px;
		 line-height: 1.5;
		 color: #434242;
	}
	
.button{
    display: inline-block;
    border-radius: 30px;
    background-color: #acd100;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 24px;
    padding: 10px;
    width: 220px;
    transition: all 0.5s;
    cursor: pointer;
    transition: 0.5s;
	text-decoration:none;
}

.button:hover{
    color: #434242;
    transition: 0.5s;
}
	
.wrapper-bt-404{
		display:block;
	    margin: 0 auto;
    	text-align: center;
		top:50%;
}
</style>

<div class="wrapper-error">
	<img class="center-img" src="<?php echo get_template_directory_uri()?>/assets/img/404.png">
	<div class="error">
		<h1>Error 404</h1>
		<p>Welcome to the 404 page! You are here because you entered the address of a page that no longer exists or has been moved to a different address.</p>
		<p>Perhaps the page you requested has been moved or deleted. It is also possible that you made a small typo when entering the address - this happens even with us, so double-check it carefully.</p>
	</div>
	<div class="wrapper-bt-404"><a class="button"  href="javascript:history.back()">Come back</a></div>
	<img class="bottom-img" src="<?php echo get_template_directory_uri()?>/assets/img/about-us-background.png">
</div>