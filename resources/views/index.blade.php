<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SKILLFORGE | HOME</title>

        <link rel="stylesheet" href="https://kit.fontawesome.com/766f35d2e9.css" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        


        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="preloader">
            <div class="loader"></div>
          </div>

        <!-- Navigation -->
        <nav>
            <img src="images/SKILLFORGE.jpg" alt="">
            <div class="navigation">
                <ul>
                    <i id="menu-close" class="fa-solid fa-xmark"></i>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="{{ url('course')}}">Course</a></li>
                    <li><a href="">Contact</a></li>
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-1 sm:block">
                        @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="img-thumbnail bulat" alt=""> {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline yellow">Log in</a>
                        @endauth
                    </div>
                @endif
                </ul>
                <img id="menu" src="{{ asset('../images/menu.png')}}" alt="">
            </div>
        </nav>

        <!-- Home -->
        <section id="home">
            <h2>Enhance Your Future With SKILLFORGE</h2><br>
            <p>SkillForge is a platform or program that can help individuals improve their skills and advance their careers. SkillForge may offer training courses, workshops, or other educational resources designed to teach practical skills that are in high demand in various industries. By using SkillForge, individuals can gain new skills, improve existing ones, and become more competitive in the job market. Ultimately, the goal of SkillForge is to help individuals enhance their future by providing them with the tools and knowledge they need to succeed in their chosen field.</p>
            <div class="btn">
                <a href="#featured" class="blue">Learn More</a>
                <a href="{{ url('course')}}" class="yellow">Visit Course</a>
            </div>
        </section>
        
        <!-- features -->
        <section id="featured">
        <h1>Awesome Features</h1>
        <p>Replenish Man have thing Gathering lights yielding shall You</p>
        <div class="fea-base">
            <div class="fea-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Scholarship Facility</h3>
                <p> Enhancing IT Skills through Scholarship Opportunities</p>
            </div>
            <div class="fea-box">
                <i class="fa-solid fa-certificate"></i>
                <h3>Online Course</h3>
                <p>Convenient and Flexible Learning for Today's Busy Learners</p>
            </div>
            <div class="fea-box">
                <i class="fa-solid fa-award"></i>
                <h3>Global Certification</h3>
                <p>The Power of Global Certification for Professionals Worldwide</p>
            </div>
        </div>
        </section>

        <!-- Courses -->
    <section id="course">
        <h1>Our Popular Course</h1>
        <p> Unlocking Your Potential with Highly Engaging and Effective Learning</p>
        <div class="course-box ">
            
            <div class="courses">
              <a class="linkcourse" href="{{ url('course/javascript')}}">
                <img src="images/JS.jpg" alt="" >
                <div class="details">
                    <span>Updated 10/3/23</span>
                    <h6>Javascript Beginners Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(254)</span>
                    </div>
                </div>
                    <div class="cost">
                        IDR 300.000
                    </div>
                  </a>
            </div>

            <div class="courses" >
                <a class="linkcourse" href="{{ url('course/html-css')}}">
                    <img src="images/c2.jpg" alt="">
                    <div class="details">
                    <span>Updated 10/3/23</span>
                    <h6>HTML and CSS Beginners Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(254)</span>
                    </div>
                </div>
                <div class="cost">
                    IDR 150.000
                </div>
            </a>
            </div>
            
            <div class="courses">
                <a class="linkcourse" href="{{ url('course/python')}}">
                    <img src="images/c3.jpg" alt="">
                    <div class="details">
                        <span>Updated 10/3/23</span>
                        <h6>Advanced Python Course</h6>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(254)</span>
                        </div>
                    </div>
                    <div class="cost">
                        IDR 320.000
                    </div>
                </a>
                </div>
                
            <div class="courses">
                <a class="linkcourse" href="{{ url('course/react')}}">
                    <img src="images/react.jpg" alt="">
                    <div class="details">
                        <span>Updated 10/3/23</span>
                        <h6>React.js Advanced Course</h6>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(254)</span>
                    </div>
                </div>
                <div class="cost">
                    IDR 280.000
                </div>
            </a>
            </div>
            <div class="courses">
                <a class="linkcourse" href="{{ url('course/ccna')}}">
                    <img src="images/server.jpg" alt="">
                    <div class="details">
                        <span>Updated 10/3/23</span>
                        <h6>Road to CCNA Course</h6>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(254)</span>
                        </div>
                    </div>
                    <div class="cost">
                        IDR 2.500.000
                    </div>
                </a>
                </div>
                <div class="courses">
                    <img src="images/b1.jpg" alt="">
                <div class="details">
                    <span>Updated 10/3/23</span>
                    <h6>Vue.js Intermediate Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(254)</span>
                    </div>
                </div>
                    <div class="cost">
                        IDR 250.000
                    </div>
            </div>
        </div>
    </section>

        <!-- Registration -->

        <!-- Footer -->
<footer>
    <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Manage Website</li>
        <li>Marketing Service</li>
        <li>Jobs</li>
    </div>

    <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Manage Website</li>
        <li>Marketing Service</li>
    </div>

    <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Manage Website</li>
        <li>Marketing Service</li>
    </div>

    <div class="footer-col">
        <h3>Guides</h3>
        <li>Research</li>
        <li>Experts</li>
        <li>Manage Website</li>
        <li>Marketing Service</li>
    </div>

    <div class="footer-col">
        <h3>Newsletter</h3>
        <p>You can Trust us. we only promo offres</p>
        <div class="subscribe">
            <input type="text" placeholder="Your Email Here">
            <a href="" class="yellow">SUBCSRIBE</a>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright @2023 All rights reserved | This website is made by Rokan</p>
        <div class="pro-links">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </div>
</footer>


        <script>
            // Navaigation Bar
            $('#menu').click(function(){
                $('nav .navigation ul').addClass('active')
            });
            $('#menu-close').click(function(){
                $('nav .navigation ul').removeClass('active')
            });
        </script>




    </body>
    <script src="https://kit.fontawesome.com/766f35d2e9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    
</html>