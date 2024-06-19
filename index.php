<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<body background="" style="background-color: brown;">
    <div class="main_body">
        <div class="menu">
            <div class="chung">
                <div class="function">
                    <div class="viTri">
                        <a href=""><img src="https://cinestar.com.vn/_next/image/?url=%2Fassets%2Fimages%2Fheader-logo.png&w=1920&q=75" alt="Home page logo"></a>
                        <div class="bookAndpd">
                            <a href="" class="Booking_T">ĐẶT VÉ NGAY</a>
                            <a href="" class="Booking_F">ĐẶT BẮP NƯỚC</a>
                        </div>
                        <div class="searchAndLogin">
                            <div class="searchIcon">
                                <div class="search-container">
                                    <input type="text" placeholder="Tìm kiếm">
                                    <button type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.415l-3.85-3.85a1.007 1.007 0 0 0-.115-.098zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="Login">
                                <a href="">Đăng nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chose_feature">
                    <div class="Location2">
                        <nav class="first">
                            <button><i class="fas fa-map-marker-alt"></i> Chọn rạp</button>
                            <ul class="menu1">
                                <li><a href="">Cinerstar Hồ Chí Minh</a></li>
                                <li><a href="">Cinerstar Hà Nội</a></li>
                                <li><a href="">Cinerstar Đà Nẵng</a></li>
                            </ul>
                        </nav>
                        
                        <div class="second">
                            <a href=""><i class="fas fa-calendar"></i> Lịch chiếu</a>
                            <a href="">Khuyến mãi</a>
                            <a href="">Thuê sự kiện</a>
                            <a href="">Giải trí</a>
                            <a href="">Giới thiệu</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>  
        <div class="Page_Content">
            <!-- this is page content -->
            <div class="slider-container">
                <div class="slider">
                    <div class="slides">
                        <img src="images/20_-coke.webp" alt="">
                        <img src="images/1215x365_1_.webp" alt="">
                        <img src="images/1215x365_4_.webp" alt="">
                        <img src="images/1215x560.webp" alt="">
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.slides').slick({
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 3000,
                        dots: true,
                        arrows: true,
                    });
                });
            </script>
            <div class="container1">
                <h3>PHIM ĐANG CHIẾU</h3>
                <div class="playing_movies">
                    <div class="playing_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                    <div class="playing_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                    <div class="playing_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                    <div class="playing_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                    <div class="playing_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                </div>
                <button class="more" id="playing">XEM THÊM</button>
                <h3>PHIM SẮP CHIẾU</h3>
                <div class="comming_movies">
                    <div class="comming_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                    <div class="comming_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                    <div class="comming_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                    <div class="comming_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                    <div class="comming_movie">
                        <div class="movie">
                            <img src="images/444790107_1493394821576518_9028438683398357373_n.jpg" alt="">
                            <h3 class="name">meo</h3>
                            <div class="react">
                                <a href="" class="trailer">Trailer</a>
                                <button class="booking">ĐẶT VÉ</button>
                            </div>    
                        </div>
                    </div>
                </div>
                <button class="more" id="playing">XEM THÊM</button>
                <script
                        type="text/javascript"
                        src="https://code.jquery.com/jquery-1.11.0.min.js"
                        ></script>
                        
                        <script
                        type="text/javascript"
                        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
                        ></script>
                        
                        <script>
                            $(document).ready(function() {
                                $('.playing_movies').slick({
                                    slidesToShow: 4, // Hiển thị 5 slide
                                    slidesToScroll: 1,
                                    infinite: true,
                                    arrows: true,
                                    draggable: false,
                                    autoplay: true,           // Enable automatic slideshow
                                    autoplaySpeed: 1500, 
                                    prevArrow: `<button type='button' class='slick-prev slick-arrow'></button>`,
                                    nextArrow: `<button type='button' class='slick-next slick-arrow'></button>`,
                                    
                                    responsive: [
                                        {
                                            breakpoint: 1024,
                                            settings: {
                                                slidesToShow: 3,
                                            }
                                        },
                                        {
                                            breakpoint: 480,
                                            settings: {
                                                slidesToShow: 1,
                                                arrows: false,
                                                infinite: false
                                            }
                                        }
                                    ]
                                });
                            });
                            $('.comming_movies').slick({
                                slidesToShow: 4, // Hiển thị 5 slide
                                slidesToScroll: 1,
                                infinite: true,
                                arrows: true,
                                draggable: false,
                                autoplay: true,           // Enable automatic slideshow
                                autoplaySpeed: 1500, 
                                prevArrow: `<button type='button' class='slick-prev slick-arrow'></button>`,
                                nextArrow: `<button type='button' class='slick-next slick-arrow'></button>`,
                                responsive: [
                                        {
                                            breakpoint: 1024,
                                            settings: {
                                                slidesToShow: 3,
                                            }
                                        },
                                        {
                                            breakpoint: 480,
                                            settings: {
                                                slidesToShow: 1,
                                                arrows: false,
                                                infinite: false
                                            }
                                        }
                                    ]
                            });
                    </script>
            </div>
            
        </div>    
             
        <div class="end_page">
            <div class="footer">
                <div>
                    <div class="container">
                    <div class="footer-wr">
                        <div class="footer-top-mobile">&nbsp;</div>
                        <div class="footer-list row">
                            <div class="footer-item col col-4"><a href="/" class="ft-logo" aria-label="The logo of Cinestar"><img src="/assets/images/footer-logo.png" alt=""></a>
                                <div class="ft-text">
                                    <p class="txt-deskop">BE HAPPY, BE A STAR</p>
                                </div>
                                <div class="ft-group-btn"><a class="btn btn--pri" href="/movie"><span class="btn__text">mua vé</span><span class="btn__icon"><i class="icon-ic-tickets"></i></span></a>
                                    <a class="btn btn--border" href="https://cinestar.com.vn/news/detail/tuyendung"><span class="btn__text">Tuyển dụng</span><span class="btn__icon"><i class="icon-ic-career"></i></span></a>
                                </div>
                            </div>
                            <div class="footer-item col col-4">
                                <p class="footer-title">CÔNG TY CỔ PHẦN GIẢI TRÍ CINESTAR</p>
                                <ul class="footer-list-item">
                                    <li class="footer-list-item"><a href="#">Giới thiệu</a></li>
                                    <li class="footer-list-item"><a href="#">Tiện ích online</a></li>
                                    <li class="footer-list-item"><a href="#">Thẻ quà tặng</a></li>
                                    <li class="footer-list-item"><a href="#">Tuyển dụng</a></li>
                                    <li class="footer-list-item"><a href="#">Liên hệ quảng cáo</a></li>
                                    <li class="footer-list-item"><a href="#">Liên hệ công ty</a></li>
                                </ul>
                            </div>
                            <div class="footer-item col col-4">
                                <p class="footer-title">điều khoản và quy định</p>
                                <ul class="footer-list-item">
                                    <li class="footer-list-item"><a href="#">Điều khoản chung</a></li>
                                    <li class="footer-list-item"><a href="#">Điều khoản giao dịch</a></li>
                                    <li class="footer-list-item"><a href="#">Chính sách thanh toán</a></li>
                                    <li class="footer-list-item"><a href="#">Chính sách bảo mật</a></li>
                                    <li class="footer-list-item"><a href="#">Câu hỏi thường gặp</a></li>
                                    <li class="footer-list-item"><a href="#">Kết nối</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-copyright">&copy; 2022 <a href="https://cinestar.com.vn" target="_self">Cinestar.com.vn</a>. All rights reserved.</div>
                    </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>
