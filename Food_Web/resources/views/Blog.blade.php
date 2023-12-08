
@extends("layout/Web_layout")

@section('title')
    Blog 
@endsection
@section('Web-Content')









<main class="main__content_wrapper">
        
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Blog Details</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index-2.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Blog Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start blog details section -->
    <section class="blog__details--section section--padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-8">
                    <div class="blog__details--wrapper">
                        <div class="entry__blog">
                            <div class="blog__post--header mb-30">
                                <h2 class="post__header--title mb-15">Lorem ipsum dolor, sit amet consectetur elit saepe!</h2>
                                <p class="blog__post--meta">Posted by : admin / On : February 14, 2022 / In : <a class="blog__post--meta__link" href="blog-details.html">Company, Image, Travel</a></p>                                     
                            </div>
                            <div class="blog__thumbnail mb-30">
                                <img class="blog__thumbnail--img border-radius-10" src="assets/img/blog/blog-page-big1.png" alt="blog-img">
                            </div>
                            <div class="blog__details--content">
                                <h3 class="blog__details--content__subtitle mb-25">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus non sint saepe rem eveniet sit ea esse praesentium!</h3>
                                <p class="blog__details--content__desc mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita in recusandae sit officia ipsa, natus ad voluptatem doloribus dolorum placeat, rem deleniti est accusamus ipsum corporis voluptates soluta totam maiores nostrum reprehenderit quasi? Laboriosam itaque ab odit harum sed aut voluptates, illum unde. Saepe enim ad ut pariatur doloremque quas harum sequi, excepturi tempore exercitationem suscipit quam recusandae corrupti quibusdam. Laboriosam sapiente provident repellat blanditiis ratione nostrum illum asperiores quo cumque in quisquam, non iste aut illo vel, alias debitis!</p>
                                <p class="blog__details--content__desc mb-30"> Vel ipsa officiis nobis eveniet omnis consequuntur neque quasi, in, optio rerum suscipit totam odio. Alias necessitatibus nulla accusantium voluptatem ipsum voluptatum, vero in impedit nobis cupiditate ea, dicta eos facilis eaque optio laudantium non neque itaque? Possimus officia aut accusamus illum, adipisci, nihil numquam minus eum fugit, beatae minima facilis magni.</p>
                                <blockquote class="blockquote__content bg__gray--color mb-30">
                                    <p class="blockquote__content--desc">Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                </blockquote>
                                <p class="blog__details--content__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus sapiente omnis sunt labore mollitia, quaerat incidunt sequi, ut alias accusamus nostrum magni fugit facilis dignissimos illum repellendus et numquam adipisci quos. Eos omnis maiores beatae cum a consequatur magnam sequi neque, at numquam qui ipsam unde veritatis voluptates quam dicta! Ipsam, mollitia illo fuga vel culpa reprehenderit quisquam maxime nesciunt. Sunt quaerat inventore aspernatur quibusdam corrupti numquam mollitia exercitationem rem alias consectetur hic iusto dignissimos nostrum odio, cumque impedit.</p>
                            </div>
                        </div>
                        <div class="blog__tags--social__media d-flex align-items-center justify-content-between">
                            <div class="blog__tags--media d-flex align-items-center">
                                <label class="blog__tags--media__title">Releted Tags :</label>
                                <ul class="d-flex">
                                    <li class="blog__tags--media__list"><a class="blog__tags--media__link" href="blog.html">Popular</a></li>
                                    <li class="blog__tags--media__list"><a class="blog__tags--media__link" href="blog.html">Business</a></li>
                                    <li class="blog__tags--media__list"><a class="blog__tags--media__link" href="blog.html">desgin</a></li>
                                    <li class="blog__tags--media__list"><a class="blog__tags--media__link" href="blog.html">Service</a></li>
                                </ul>
                            </div>
                            <div class="blog__social--media d-flex align-items-center">
                                <label class="blog__social--media__title">Social Share :</label>
                                <ul class="d-flex">
                                    <li class="blog__social--media__list">
                                        <a class="blog__social--media__link" target="_blank" href="https://www.facebook.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                <path data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="blog__social--media__list">
                                        <a class="blog__social--media__link" target="_blank" href="https://twitter.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                <path data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="blog__social--media__list">
                                        <a class="blog__social--media__link" target="_blank" href="https://www.instagram.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                    <li class="blog__social--media__list">
                                        <a class="blog__social--media__link" target="_blank" href="https://www.youtube.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                <path data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Youtube</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="related__post--area mb-50">
                            <div class="section__heading text-center mb-30">
                                <span class="section__heading--subtitle">Recently added our store</span>
                                <h2 class="section__heading--maintitle">Related Articles</h2>
                            </div>
                            <div class="row row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n28">
                                <div class="col mb-28">
                                    <div class="related__post--items">
                                        <div class="related__post--thumb border-radius-10 mb-20">
                                            <a class="display-block" href="blog-details.html"><img class="related__post--img display-block border-radius-10" src="assets/img/blog/related-post1.png" alt="related-post"></a>
                                        </div>
                                        <div class="related__post--text">
                                            <h3 class="related__post--title mb-10"><a class="related__post--title__link" href="blog-details.html">Post With Gallery</a></h3>
                                            <span class="related__post--deta">February 14, 2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="related__post--items">
                                        <div class="related__post--thumb border-radius-10 mb-20">
                                            <a class="display-block" href="blog-details.html"><img class="related__post--img display-block border-radius-10" src="assets/img/blog/related-post2.png" alt="related-post"></a>
                                        </div>
                                        <div class="related__post--text">
                                            <h3 class="related__post--title mb-10"><a class="related__post--title__link" href="blog-details.html">Post With Vedio</a></h3>
                                            <span class="related__post--deta">February 14, 2022</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="comment__box">
                            <div class="reviews__comment--area2 mb-50">
                                <h2 class="reviews__comment--reply__title style2 h3 mb-25">Recent Comment</h2>
                                <div class="reviews__comment--inner">
                                    <div class="reviews__comment--list d-flex">
                                        <div class="reviews__comment--thumb">
                                            <img src="assets/img/other/comment-thumb1.png" alt="comment-thumb">
                                        </div>
                                        <div class="reviews__comment--content ">
                                            <div class="reviews__comment--top d-flex justify-content-between">
                                                <div class="reviews__comment--top__left">
                                                    <h3 class="reviews__comment--content__title2 h4">Jakes on</h3>
                                                    <span class="reviews__comment--content__date2">February 14, 2022</span>
                                                </div>
                                                <button class="comment__reply--btn btn">Reply</button>
                                            </div>
                                            <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                        </div>
                                    </div>
                                    <div class="reviews__comment--list margin__left d-flex">
                                        <div class="reviews__comment--thumb">
                                            <img src="assets/img/other/comment-thumb2.png" alt="comment-thumb">
                                        </div>
                                        <div class="reviews__comment--content ">
                                            <div class="reviews__comment--top d-flex justify-content-between">
                                                <div class="reviews__comment--top__left">
                                                    <h3 class="reviews__comment--content__title2 h4">Laura Johnson</h3>
                                                    <span class="reviews__comment--content__date2">February 14, 2022</span>
                                                </div>
                                                <button class="comment__reply--btn btn">Reply</button>
                                            </div>
                                            <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                        </div>
                                    </div>
                                    <div class="reviews__comment--list d-flex">
                                        <div class="reviews__comment--thumb">
                                            <img src="assets/img/other/comment-thumb3.png" alt="comment-thumb">
                                        </div>
                                        <div class="reviews__comment--content ">
                                            <div class="reviews__comment--top d-flex justify-content-between">
                                                <div class="reviews__comment--top__left">
                                                    <h3 class="reviews__comment--content__title2 h4">Richard Smith</h3>
                                                    <span class="reviews__comment--content__date2">February 14, 2022</span>
                                                </div>
                                                <button class="comment__reply--btn btn">Reply</button>
                                            </div>
                                            <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews__comment--reply__area">
                                <form action="#">
                                    <h3 class="reviews__comment--reply__title mb-20">Leave A Comment</h3>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 mb-20">
                                            <label>
                                                <input class="reviews__comment--reply__input" placeholder="Your Name...." type="text">
                                            </label>
                                        </div>  
                                        <div class="col-lg-4 col-md-6 mb-20">
                                            <label>
                                                <input class="reviews__comment--reply__input" placeholder="Your Email...." type="email">
                                            </label>
                                        </div> 
                                        <div class="col-lg-4 col-md-6 mb-20">
                                            <label>
                                                <input class="reviews__comment--reply__input" placeholder="Your Website...." type="text">
                                            </label>
                                        </div> 
                                        <div class="col-12 mb-15">
                                            <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...." ></textarea>
                                        </div> 
                                         
                                    </div>
                                    <button class="btn text-white" data-hover="Submit" type="submit">SUBMIT</button>
                                </form>   
                            </div> 
                        </div> 
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4">
                    <div class="blog__sidebar--widget left widget__area">
                        <div class="single__widget widget__search widget__bg">
                            <h2 class="widget__title h3">Search Objects</h2>
                            <form class="widget__search--form" action="#">
                                <label>
                                    <input class="widget__search--form__input" placeholder="Search..." type="text">
                                </label>
                                <button class="widget__search--form__btn" aria-label="search button">
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                </button>
                            </form>
                        </div>
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Categories</h2>
                            <ul class="widget__categories--menu">
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img" src="assets/img/product/categories11.png" alt="categories-img">
                                        <span class="widget__categories--menu__text">Fresh Vegetables</span>
                                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories12.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories15.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories14.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories13.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img" src="assets/img/product/categories12.png" alt="categories-img">
                                        <span class="widget__categories--menu__text">Fresh mushroom</span>
                                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" >
                                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories12.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories15.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories14.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories13.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img" src="assets/img/product/categories13.png" alt="categories-img">
                                        <span class="widget__categories--menu__text">Dairy & chesse</span>
                                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories16.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories15.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories14.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories13.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img" src="assets/img/product/categories14.png" alt="categories-img">
                                        <span class="widget__categories--menu__text">Green dhaniya</span>
                                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories12.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories15.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories14.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories13.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="widget__categories--menu__list">
                                    <label class="widget__categories--menu__label d-flex align-items-center">
                                        <img class="widget__categories--menu__img" src="assets/img/product/categories15.png" alt="categories-img">
                                        <span class="widget__categories--menu__text">Orange Juice</span>
                                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                        </svg>
                                    </label>
                                    <ul class="widget__categories--sub__menu">
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories12.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Discount Weekly</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories15.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Green dhaniya</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories14.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">resh Nuts</span>
                                            </a>
                                        </li>
                                        <li class="widget__categories--sub__menu--list">
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="blog-details.html">
                                                <img class="widget__categories--sub__menu--img" src="assets/img/product/categories13.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text">Millk Cream</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Post Article</h2>
                            <div class="product__grid--inner">
                                <div class="product__grid--items d-flex align-items-center">
                                    <div class="product__grid--items--thumbnail">
                                        <a class="product__items--link" href="blog-details.html">
                                            <img class="product__grid--items__img product__primary--img" src="assets/img/product/small-product2.png" alt="product-img">
                                            <img class="product__grid--items__img product__secondary--img" src="assets/img/product/small-product3.png" alt="product-img">
                                        </a>
                                    </div>
                                    <div class="product__grid--items--content">
                                        <h3 class="product__grid--items--content__title h4"><a href="blog-details.html">Vegetables Green-surface</a></h3>
                                        <span class="meta__deta">February 14, 2022</span>
                                    </div>
                                </div>
                                <div class="product__grid--items d-flex align-items-center">
                                    <div class="product__grid--items--thumbnail">
                                        <a class="product__items--link" href="blog-details.html">
                                            <img class="product__grid--items__img product__primary--img" src="assets/img/product/small-product7.png" alt="product-img">
                                            <img class="product__grid--items__img product__secondary--img" src="assets/img/product/small-product6.png" alt="product-img">
                                        </a>
                                    </div>
                                    <div class="product__grid--items--content">
                                        <h3 class="product__grid--items--content__title h4"><a href="blog-details.html">Green-Mango Drinks</a></h3>
                                        <span class="meta__deta">February 14, 2022</span>
                                    </div>
                                </div>
                                <div class="product__grid--items d-flex align-items-center">
                                    <div class="product__grid--items--thumbnail">
                                        <a class="product__items--link" href="blog-details.html">
                                            <img class="product__grid--items__img product__primary--img" src="assets/img/product/small-product5.png" alt="product-img">
                                            <img class="product__grid--items__img product__secondary--img" src="assets/img/product/small-product4.png" alt="product-img">
                                        </a>
                                    </div>
                                    <div class="product__grid--items--content">
                                        <h3 class="product__grid--items--content__title h4"><a href="blog-details.html">Organic Fresh-Foods</a></h3>
                                        <span class="meta__deta">February 14, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Brands</h2>
                            <ul class="widget__tagcloud">
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Organic</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Vegetable</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Giant</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Grocery</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Foods</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Bakery</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Dairies</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="blog-details.html">Nature </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog details section -->

    <!-- Start shipping section -->
    <section class="shipping__section2 shipping__style3">
        <div class="container">
            <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping1.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Shipping</h2>
                        <p class="shipping__items2--content__desc">From handpicked sellers</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping2.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Payment</h2>
                        <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping3.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Return</h2>
                        <p class="shipping__items2--content__desc">30 day guarantee</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="assets/img/other/shipping4.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Support</h2>
                        <p class="shipping__items2--content__desc">Support every time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shipping section -->
</main>



@endsection