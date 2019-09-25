<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Wordify &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
   
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
    #content{
          width: 250px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.col-md-12.col-lg-4.sidebar{
  bottom: 850px;
}
</style>
  <body>
</head>
<div class="wrap">

      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="#" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="text" id="s" placeholder="Type keyword to search...">
                </form>
              </div>
            </div>
          </div>
        </div>

      
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/biography">Biography</a>
                </li>
               

                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact">Contact</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->



   <section class="site-section py-sm">
        <div class="container">
          
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
              
           @foreach($posts as $post)
                <div class="col-md-6">
                  <a href="/read/{{$post->id}}" class="blog-entry " >
                    <img src="images/img_5.jpg" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"> {{$post->category_id}}</span>&bullet;
                        <span class="mr-2">{{$post->created_at->diffForHumans()}}</span>
                       
                      </div>
                      <h2>{{$post->title}}</h2>
                    </div>
                
                </div>
                 @endforeach

               </div>
                  </a>
                </div>
              </div>

             


<section class="site-section py-sm">
        <div class="container">
          
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              

             

              

              

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
              
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <div class="bio text-center">
                  <img src="images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    @foreach($biographies as $biography)
                    <h2>{{$biography->title}} </h2>
                    <p id="content">{{$biography->content}}</p>
                    @endforeach
                    <p><a href="/biography" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                    <p class="social">
                      <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    </p>
                  </div>
                </div>
              </div>
             
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Categories</h3>
                <ul class="categories">
                  @foreach($categories as $category)
                  <li><a href="/categories/{{$category->category_id}}">{{$category->category_name}}</a></li>
                
                @endforeach
                 
                </ul>
              </div>
              <!-- END sidebar-box -->

              
          </div>
        </div>
      </section>
    

    </div>

  </body>
</html>
<!--
        <p>Welcome to my blog</p>
        <h1>Te dhenat e marrura nga databaza</h1>
    
        <div class="flex-container">
          @foreach($posts as $post)
        <div>
            
              <a href="/read/{{$post->id}}">{{$post->title}} </a>
                </div>
            @endforeach
          
         
    

-->
    </body>
</html>
