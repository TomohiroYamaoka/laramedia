<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToDo App</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
　
<body>
    <section id="header">
        <div class="container">
            <img src="/images/reading.png" class="logo">
            <div class="header-text">
                <h1>The purpose is to teach, bring</h1>
                <span class="square"></span>
                <p>ffajknfa fajkfa;fa afaj;</p>
                <button class="common-btn">Read more</button>
            </div>
        </div>
    </section> 
        
   <!-------about------------> 
   <section id="about">
        <div class="about-left-col">
           <img src="images/about.png">
        </div>   
        <div class="about-right-col">
            <div class="about-text">
                <h1>About this media</h1>
                <p>このアプリの説明文章<p>     
            </div>        
        </div>    
    </section>
    
    <!-------features------------> 
    <section id="features">
        <div class="feature-row">
            <div class="feature-col">
                <img src="images/feature1.png">
                <h4>Learn Anyywhere</h4>
                <p>fafauhafa</p>
            </div>
            <div class="feature-col">
                <img src="images/features2.png">
                <h4>Expert Teachers</h4>
                <p>fafjajfai</p>
            </div>
            <div class="feature-col">
                <img src="images/features2.png">
                <h4>Expert Teachers</h4>
                <p>fafjajfai</p>
            </div>
        </div>
        <div class="feature-btn">
            <button class="common-btn">Read More</button>
        </div>    
    </section> 
    
    

    <!-------courses------------> 
    <section id="courses">
        <div class="container course-row">
            <div class="course-left-col">
                <div class="course-text">
                    <h1>Browse our top</h1>
                </div>                
                    <div class="course-right-col">
                <img src="images/course.png">
            </div>
        </div>   
    </section>         

    
    
    
    
    
    <!------サイドバー----->
     <nav id="sideNav">
         <ul>
             <li><a href="#">HOME</a></li>
             <li><a href="#">ABOUT US</a></li>
             <li><a href="#">FEATURES</a></li>
             <li><a href="#">COURSES</a></li>
             <li><a href="#">OFFER</a></li>
             <li><a href="#">CONTACT</a></li>
         </ul>
        </nav>
    <img src="images/menu.png" id="menuBtn">    
    
    <!-------サイドバーのアニメーション----------->
    <script>
        var menuBtn=document.getElementById("menuBtn")
        var sideNav=document.getElementById("sideNav")

        sideNav.style.right="-250px"
        menuBtn.onclick=function(){
            if(sideNav.style.right=="-250px"){
                sideNav.style.right="0";
            }
            else{
                sideNav.style.right="-250px";
            }
        }
    </script>    
</body> 

