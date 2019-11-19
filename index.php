<!DOCTYPE html>
<html>
    <head>
        <title>DvCorp</title>
        <link rel="stylesheet" href="./Css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="./Css/Landing.css"/>
        <link rel="shortcut icon" href="DVC.png" type="image/x-icon"/>
    </head>
    <body data-spy="scroll" data-target="#navbarSupportedContent">
        <div class="background">
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
                <!-- <div class="container"> -->
                    <a class="navbar-brand" href="index.php"><img src="DVC.png" height="30px" width="66px">Rea-Connekt</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="DvCorpAboutUs.php">Our Mission</a>
                                    <a class="dropdown-item" href="MeettheTeam.php">The Team</a>
                                    </div>                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="SearchOutput.php?id=AutoService">Auto Services</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=Beauty">Beauty</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=Restaurants">Restaurants</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=Medical">Medical Services</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=HomeServices">Home services</a>
                                    <a class="dropdown-item" href="SearchOutput.php?id=Entertainment">Entertainment Centers</a>
                                </div>
                        </ul>

                        <ul class="navbar-nav nav navbar-right">
                            <!-- <li class="mr-2">
                                <a class="nav-link" href="DvCorpSignUp.php">SignUp
                                    <i class="fa fa-user-plus"></i>
                                </a>                                
                            </li> -->
                            <li class="mr-5">
                                <a class="nav-link" href="DvCorpLogin.php">Login
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                
                <!-- </div> -->
                   
            </nav> <br><br><br>
            <div class="container">
                <form>
                    <div class="input-group">
                        <input id="form-control" class="form-control" type="text" placeholder="What are you looking for?" name="Search">  <i id="form-control" class="fa fa-map-marker" aria-hidden="true"></i>
                        <input id="form-control" class="form-control" type="text" placeholder="Jabi, Abuja?" name="Search">
                        <!-- <select id="form-control" class="form-control">
                                <option value="Abuja">Abuja</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Jos">Jos</option>
                                <option value="Kano">Kano</option>
                                <option value="Port Harcourt">Port Harcourt</option>
                                <option value="Onitsha">Onitsha</option>
                                <option value="Owerri">Owerri</option>
                                <option value="Minna">Minna</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Abia">Abia</option>
                                <option value="Ibadan"> Ibadan</option>
                        </select>     -->
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            
                    </div>
                </form>
            </div>
            <br>
            <!--Start of Image Slider-->
            <div id="carouselEx" class="carousel slide" data-ride="carousel" data-interval="7000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselEx" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselEx" data-slide-to="1"></li>
                    <li data-target="#carouselEx" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url(img/invent3.jpg)">
                        <div class="carousel-caption text-center">
                                <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <h3 class="jumbotron-vp text-center">
                                                        Are you a Business owner</h3>
                                                    
                                                    <hr>
                                                   
                                        
                                                </div>
                                            </div>
                                        </div>
                        
                                    </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url(img/invent2.jpg)">
                    <div class="carousel-caption text-center">
                                <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <h3 class="jumbotron-vp text-center">
                                                        Get your Business Listed Today</h3>
                                                </div>
                                            </div>
                                        </div>
                        
                                    </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url(img/invent4.jpg)">
                    <div class="carousel-caption text-center">
                                <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <h3 class="jumbotron-vp text-center">
                                                        Find any Business you want</h3>
                                                </div>
                                            </div>
                                        </div>
                        
                                    </div>
                        </div>
                
                    </div>
                </div>
            </div>


            
            </div>
        <div class="jumbotron container-fluid">
            <div class="container mt-6">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                    <div class="item"><img src="./img/engineering.jpg"></div>
                    <div class="item"><img src="img/agriculture.jpg"></div>
                    <div class="item"><img src="img/handicrafts.jpg"></div>
                    <div class="item"><img src="img/science.jpg"></div>
                    <div class="item"><img src="img/software.jpg"></div>
                    </div>
                </div>
            </div>

         
        </div>
        <!-- End of jumbotron -->
        <div class="container-fluid">
            <h4 id="new"> New Listings</h4>
            <div class="row" id="vision">
                <div class="col-md-4">
                    <div class="card text-center" style="background-image:url(./img/img.jpg); color:white;">
                        <div class="card-body">
                            <h5 class="card-title">Our Vision</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                            <p class="card-text">We at Rea-Connekt are working towards reducing the rate of unemployment and underemployment in Nigeria.</p>
                            <a href="DvCorpAboutUs.php" class="card-link">Learn More</a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                <div class="card text-center" style="background-image:url(./img/img.jpg); color:white;">
                        <div class="card-body">
                            <h5 class="card-title">Target</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --><br>
                            <p class="card-text">We target young Inventors, Innovators and Artisans so as to create an interconnecting platform.</p>
                            <a href="DvCorpAboutUs.php" class="card-link">Learn More</a>
                        </div>
                    </div>
                </div>
                    
                
                <div class="col-md-4">
                <div class="card text-center" style="background-image:url(./img/img.jpg); color:white;">
                        <div class="card-body">
                            <h5 class="card-title">Our Mission</h5> 
                            <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --><br>
                            <p class="card-text">We intend to achieve our vision by exposing Inventors, Innovators and Artisans to Investors.</p>
                            <a href="DvCorpAboutUs.php" class="card-link">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <br>
        <div class="jumbotron container-fluid">
            <h4 id="new">Top Rated</h4>
            <div id="red">
                    <div class="row">
                    <div class="col-md-6" id="video">
                        <video class="d-block w-100" height="auto" width="auto" controls> <source src="Agumented Reality.mp4"></video>
                    </div>
                    <div class="col-md-6" id="slider">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="innovation.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="innovation2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="innovation3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="innovation4.jpg" class="d-block w-100" alt="...">
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <br><br><br>
        
        
        
        <div class="row" id="add">
            <div class="col-lg-12">
                <img src="./img/add.jpg" alt="Advert">
            </div>
        </div>
            <br><br><br>

        <div class="container-fluid">
                <h4 id="new">Reviws</h4>
                <hr>
            <div class="row">
                <div class="col-md-8">
                <article class="g5 peopleQuotes txt container"><br>
                    <figure> <img class="qt" alt="Oladotun" data-src="./img/Oladotun.jpg" src="./img/Oladotun.jpg" height="180px" width="180px" style= "float:left; margin-right: 10px;"/><figcaption><blockquote><p>Rea-Connekt is the best website for connecting young and gifted minds with the aim of creating top-end entrepreneurs in Africa.&quot;</p> <cite>Akangbe Oladotun<em>, Tech Enthusiast and Founder, Dotmanois-Corp</em></cite></blockquote></figcaption> </figure> <br><br><br><br>
                    <figure> <img class="qt" alt="Mary" data-src="./img/mary.jpg" src="./img/mary.jpg" height="180px" width="180px" style= "float:left; margin-right: 10px;"/><figcaption><blockquote><p>&quot;Rea-Connekt gave me the opportunity and platform to connect to great minds who ended up becoming co-founders of MarkIT. It connected us to our initial investors. Rea-Connekt is the best platform for obscure innovators to reach the wprld.&quot;</p> <cite>Mary Ma'aji<em>, Co-Founder, MarkIT</em></cite></blockquote></figcaption> </figure> <br><br><br>
                    <figure> <img class="qt" alt="Precious" data-src="./img/presh.jpg" src="./img/presh.jpg" height="180px" width="180px" style= "float:left; margin-right: 10px;"/><figcaption><blockquote><p>&quot;I've been fortunate to engage with the Rea-Connekt community at past events over the last few years, and always walk away impressed with the passion and caliber of talent that Rea-Connekt brings together.&quot;</p> <cite>Godwin Precious<em>, Co-Founder &amp; President, NobleTech</em></cite></blockquote></figcaption> </figure>
        
                </article>

                </div>
                <div class="col-md-4">
                         <div class="card text-center">
                                <img class="card-img-top" src="./img/wind.jpg">
                                <div class="card-body">
                                    <h4>The boy Who Harnessed the Wind</h4>
                                    <p>Back in 2009 William Kamkwamba, a 14 year old boy from Malawi, had to leave school when his family could no longer afford the fees. Determined to make something of his life he ended up making a windmill for his village to provide electricity – he made it from old bike parts.</p>
                                </div>
                            </div>
                </div>

            </div>
            <hr>

        </div>

        <div class="jumbotron container-fluid">
            <div class="col-12 text-center">
                <div class="heading-underline"></div>
            </div>
            <div class="row no-padding">

                <div class="col-sm-2">
                    <div class="categories">
                        <a href="https://www.dropbox.com/" target="_blank">
                            <img src="./img/dropbox.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-sm-2">
                        <div class="categories">
                            <a href="https://www.coinbase.com/" target="_blank">
                                <img src="./img/coinbase.png">
                            </a>
                        </div>
                </div>
                <div class="col-sm-2">
                            <div class="categories">
                                <a href="https://gitlab.com/gitlab-com" target="_blank">
                                    <img src="./img/gitlab.png">
                                </a>
                            </div>
                </div>
           
                <div class="col-sm-2">
                                <div class="categories">
                                    <a href="https://www.memsql.com/" target="_blank">
                                        <img src="./img/MemSQL.png">
                                    </a>
                                </div>
                </div>
                <div class="col-sm-2">
                                    <div class="categories">
                                        <a href="https://amplitude.com/" target="_blank">
                                            <img src="./img/Amplitude.png">
                                        </a>
                                    </div>
                </div>
                <div class="col-sm-2">
                                        <div class="categories">
                                            <a href="https://paystack.com/" target="_blank">
                                                <img src="./img/paystack.png">
                                            </a>
                                        </div>
                </div>

            </div><!--End of Row-->

        </div>

        

        

           
  
       
        <div>
        <footer>
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="DvCorpAboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php" onclick="press()">Subscribe</a>
                    </li>
                  </ul>

        <div class="row">
            <div class="col-md-4">
            <form>
    <h4><a name="contact"></a>Contact us</h4><br>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputEmail4">Firstname</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Firstname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Lastname</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="example@gmail.com">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone Nunber</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Message</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Type Message">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
            <div class="col-md-4">
            <div class="contact">
            <h3><a name="contact"></a>Address</h3><br><br>
                  <p>ReaTech Office <p>Faith Land Estate, Kaduna, Nigeria. <p>reatech@gmail.com  <p>Visit us at <a href="https://web.facebook.com/ezeaba.chukwuemeka">Facebook</a><p>Phone: 08119698166</p><p><span style="text-align: end">&copy;2019. All Rights Reserved</span></p>
                  <div class="social">
                    <a href="facebook.com"><img src="facebook-logo-png-9.png" width="40px" height="40px"></a>
                    <a href="twitter.com"><img src="twitter_PNG32 (1).png" width="40px" height="40px"></a>
                    <a href="youtube.com"><img src="youtube_PNG15.png" width="40px" height="40px"></a>
                    <a href="linkedin.com"><img src="linkedIn_PNG38.png" width="40px" height="40px"></a>
    </div>
                </div>
            <div class="col-md-4">

            </div>

        </div>
                  
                  <br>
                  
                </div>
                
    

                  <br>
            </footer>
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="./javaScript/bootstrap.min.js" type="text/javaScript"></script>
            <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
            <script type="text/javascript">
                $('.carousel').carousel(
                    {
                        interval: 3000
                    }
                );
            </script>
            <script type="text/javascript">
                $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                    autoplay:1,
                responsive:{
                    0:{
                    items:1
                    },
                    600:{
                    items:3
                    },
                    1000:{
                    items:5
                    }
                }
                });
            </script>

            <script src="./javaScript/landing.js" type="text/javaScript"></script>
    </body>



</html>