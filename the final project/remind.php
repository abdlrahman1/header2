<html>

<html>
      
	  
     <meta cherset = "utf-8">
         <meta name = "description" content = "welcome to my website">
         <meta name = "viewport" contant = "width=device-width,intial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
    
  
<head>


<script>












function toogle()
{
document.querySelector('.navbar').classList.toggle('navbar--open');


}

function show()
{
		
	document.getElementById('logo-center').style.display="none";
	document.getElementById('hide-register-login').style.display="none";
	document.getElementById('text-search').style.display="inline-block";
	document.getElementById('icon-search').style.display="none";
	document.getElementById('close-search').style.display="inline-block";
document.getElementById('btn-search').style.display="inline-block";
}


function closesearch()
{
	
	
	document.getElementById('logo-center').style.display="inline-block";
	document.getElementById('text-search').style.display="none";
	document.getElementById('icon-search').style.display="inline-block";
	document.getElementById('close-search').style.display="none";
	document.getElementById('hide-register-login').style.display="inline-block";
	document.getElementById('btn-search').style.display="none";
	
}







const scrollBtn = document.querySelector('.scroll-btn') ;


window.addEventListener('scroll', () => {
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollBtn.style.display = 'block' ;
    }
    else {
        scrollBtn.style.display = 'none' ;
    }
})
scrollBtn.addEventListener('click' , () => {
    window.scroll({
        top: 0 ,
        behavior: "smooth"
    })
})


















</script>





<body>
	<div class="social">
 	 <a href="#" class="fa">  <img src="img/egypt-flag-icon-32.png" style="float:right" width="22px">  </a> </img>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-instagram">  </a>	</div>

	
		<header>
			
			
			
			
			
				<div class="logo">
					<a href="#" id="hide-register-login">register/login</a>
					
					
					
					
					
				</div>
				<nav>
				
								
				
			 <div class="container-menu-bar-icon" onclick="toogle()" id="container-menu-bar-icon"> 
			 <div class="menu-bar-icon">
			 <div class="menu-bar-icon">
			 <div class="menu-bar-icon">  </div>  
 			 </div>
			 </div>
			 </div> 
			 <span style="color:white; margin:auto;" class="menu-span" id="menu-span"> menu </span>
			
			
			
								
								
			<input type="text" id="text-search" placeholder="search for products"> 
			
			<img src="img/icons8-search-24.png" id="icon-search" onclick="show()"> 
			</input>
			
			<a href="#"> <img src="img/logo.png" width="180px" height="55px" align="center" id="logo-center"> </a>
			
			
		
			
			
			
			

								
								
								 
								
								<div class="x" id="close-search" onclick="closesearch()"> </div>
								
								
								
								
								
								
								
								
								
								
								
								
													
							 
	                     	</div>							</nav>
		                  
						  
						  
	                         		</div>
									
		</header>
		
		
		
		
		
		<div class="contianer-drop">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Gategorys</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3 >Category</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
    </div>
  </div> 
</div>
</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				
				<div class="scroll-btn">
        <i class="fas fa-arrow-circle-up"></i>
    </div>
	</div>


		
	
		
	
		
		
		<div class="navbar">
			
		  
		
	
		
		
		
	
		
		<img src="img/211652_close_icon.png" width="27px" onclick="toogle()" class="colse-nav-icon">   
		
<a href="#" class="navbar__link" id="navbar__link">

<span class="a_menu" id="english"> العربيه    </span>
<img src ="img/egypt-flag-icon-32.png" style="width:18px">


</a>

<span style="float:right; margin:-47px 50px 0px 10px" onclick="toogle()"> close </span>

</img>

</img>


<a href="#" class="navbar__link">

<span class="a_menu">Register/login </span> 
</a>


<a href="#" class="navbar__link">
<span class="a_menu">Home </span> 

</a>

<a href="#" class="navbar__link">
<span class="a_menu">about </span> 

</a>

<a href="#" class="navbar__link">
<span class="a_menu">contact us </span> 

</a>



<a href="#" class="navbar__link">
<span class="a_menu">form </span> 
</a>



<a href="#" class="navbar__link">
<span class="a_menu">protoflio </span> 
</a>
</div>
</div>



 <footer>
      <a href="#" id="link_footer1">footer Link 3</a><br><br>
      <a href="#" id="link_footer2">spesific link</a>
    </footer>
