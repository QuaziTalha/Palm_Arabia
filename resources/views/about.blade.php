@extends('layout')
@section('title', 'Palm Arabia About Us')
@section('content')
<!-- Body main wrapper start -->
<main>
    <!-- Page-banner-area -->
    <section class="bd-page__banner-area include-bg page-overlay"
       data-background="{{url('public/assets/img/banner/page-banner-1.jpg')}}">
       <div class="container">
          <div class="row">
             <div class="col-xl-12">
                <div class="bd-page__banner-content text-center">
                   <h2>About Palm Arabia</h2>
                   <span><a href="{{route('/')}}">Home </a>- About</span>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Page-banner-end -->
    <!-- About-area-start -->
    <section class="bd-about__area pt-130 pb-65">
       <div class="container">
          <div class="row g-0">
             <div class="col-xxl-5 col-xl-5 col-lg-6">
                <div class="bd-about__wrapper mb-60">
                   <div class="bd-about__image-1 m-img mb-60">
                      <img src="{{url('public/assets/img/about/about-img-3.jpg')}}" alt="about-image">
                   </div>
                   <div class="bd-about__image-2 m-img">
                      <img src="{{url('public/assets/img/about/about-img-4.jpg')}}" alt="about-image">
                   </div>
                </div>
             </div>
             <div class="col-xxl-7 col-xl-7 col-lg-6">
                <div class="bd-about__content-box mb-60">
                   <div class="bd-section__title-wrapper mb-50">
                      <span class="bd-sub__title">About Us</span>
                      <h2 class="bd-section__title mb-30">We believe in pure and <br> organic quality</h2>
                   </div>
                   <div class="bd-about__inner">
                      <div class="bd-about__image-3">
                         <img src="{{url('public/assets/img/about/about-img-5.jpg')}}" alt="about-imgage">
                      </div>
                      <div class="bd-about__info">
                         <p class="about-text">PALM ARABIA TRADING is one of Qatar leading importer and wholesaler of Food products based in State of Qatar. We are located in Doha, which has become a global and strategic hub for commerce . PALM ARABIA TRADING Importer arm of the business and Tree of fresh fruits & vegetables Trading is our sister company based in Qatar wholesale market it is the distributer of the finest Fruits & Vegetables from all over the world.PALM ARABIA TRADING have over 10 years of dedicated experience in supplying the market with the best products from all over the world.</p>
                   {{--       <div class="bd-about__author">
                            <div class="bd-about__author-thumb">
                               <img src="{{url('public/assets/img/about/about-author.png')}}" alt="about-author">
                            </div>
                            <div class="bd-about__author-info">
                               <h4>Noyaviram</h4>
                               <span>Founder & CEO, Banana</span>
                               <div class="ba-author__signature">
                                  <img src="{{url('public/assets/img/about/author-signature.png')}}" alt="author-signature">
                               </div>
                            </div>
                         </div> --}}
                      </div>
                   </div>
                   <p class="about-text mt-20"> We are importer and distributer of fresh fruits &vegetables in wholesale Market . We are importer more food products like Kashmiri saffron ,Spices, Nuts , Rice and more . PALM ARABIA TRADING imports from Europe, Middle East , Asia , Africa, Australia, and USA. PALM ARABIA TRADING brings to the table the widest range of goods from the four corners of the Earth into Qatar, by Air, Sea and Land. Since years we’ve been successfully working in the field of Fruits and Vegetables.
                  </p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- About-area-end -->
    <!-- counter-area-start -->
    <section class="bd-counter__area-2 pb-65">
       <div class="counter-style-2">
          <div class="container">
             <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                   <div class="bd-counter__single-item mb-60">
                      <div class="bd-counter__content">
                         <span class="counter">89</span><span>k</span><span>+</span>
                         <h4>Organic Products</h4>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                   <div class="bd-counter__single-item mb-60">
                      <div class="bd-counter__content">
                         <span class="counter">80</span><span>k</span><span>+</span>
                         <h4>Metric to supplied</h4>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                   <div class="bd-counter__single-item mb-60">
                      <div class="bd-counter__content">
                         <span class="counter">40</span><span>k</span><span>+</span>
                         <h4>Experienced Farmer</h4>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                   <div class="bd-counter__single-item mb-60">
                      <div class="bd-counter__content">
                         <span class="counter">25</span><span>k</span><span>+</span>
                         <h4>Organic Awards</h4>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- counter-area-end -->
    <!-- Testimonial-area-start -->
    <section class="bd-testimonial__area grey-bg pt-130 pb-120">
       <div class=" container">
          <div class="row g-0 justify-content-center">
             <div class="col-xxl-8 col-xl-9 col-lg-10">
                <div class="bd-testimonial__inner p-relative">
                   <div class="bd-testimonial-active swiper-container">
                      <div class="swiper-wrapper">
                         <div class="swiper-slide">
                            <div class="bd-testimonial__wrapper text-center">
                               <div class="bd-testimonial__thumb">
                                  <img src="{{url('public/assets/img/testimonial/testimonial-1.png')}}" alt="testimonial-image">
                               </div>
                               <div class="bd-testimonial__content">
                                  <p>Buying a package usually means you buy two or more services, with each service
                                     coming at a discounted price. For example, instead of buying a manicure for combo
                                     of the two carrot.</p>
                                  <div class="bd-testimonial__author">
                                     <h3>Charlotte Sophia</h3>
                                     <span>Team Leader, Codex</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="bd-testimonial__wrapper text-center">
                               <div class="bd-testimonial__thumb">
                                  <img src="{{url('public/assets/img/testimonial/testimonial-2.png')}}" alt="testimonial-image">
                               </div>
                               <div class="bd-testimonial__content">
                                  <p>Buying a package usually means you buy two or more services, with each service
                                     coming at a discounted price. For example, instead of buying a manicure for combo
                                     of the two carrot.</p>
                                  <div class="bd-testimonial__author">
                                     <h3>Calex White</h3>
                                     <span>Team Leader, Bdeves</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- If we need navigation buttons -->
                   <div class="bd-testimonial__navigation">
                      <button class="testimonial-button-prev"><i class="fa-regular fa-angle-left"></i></button>
                      <button class="testimonial-button-next"><i class="fa-regular fa-angle-right"></i></button>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Testimonial-area-end -->
    <!-- Team-area-start -->
    <section class="bd-team__area pt-125 pb-95">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="bd-section__title-wrapper text-center mb-60">
                   <span class="bd-sub__title">Professional Team</span>
                   <h2 class="bd-section__title mb-30">Meat the Farmers</h2>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="bd-team__wrapper text-center mb-30">
                   <div class="bd-team__thumb w-img p-relative">
                      <a href="team-details.html"><img src="{{url('public/assets/img/team/team-thumb-01.jpg')}}" alt="team-thumb"></a>
                      <div class="bd-content__inner">
                         <div class="bd-team__share">
                            <a href="team-details.html"><i class="fa-light fa-share-nodes"></i></a>
                            <div class="bd-team__action">
                               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                               <a href="#"><i class="fa-brands fa-twitter"></i></a>
                               <a href="#"><i class="fa-brands fa-instagram"></i></a>
                               <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="bd-team__content">
                      <h4><a href="team-details.html">David Askerph</a></h4>
                      <span>Sr. Farmer</span>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="bd-team__wrapper text-center  mb-30">
                   <div class="bd-team__thumb w-img p-relative">
                      <a href="team-details.html"><img src="{{url('public/assets/img/team/team-thumb-02.jpg')}}" alt="team-thumb"></a>
                      <div class="bd-content__inner">
                         <div class="bd-team__share">
                            <a href="team-details.html"><i class="fa-light fa-share-nodes"></i></a>
                            <div class="bd-team__action">
                               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                               <a href="#"><i class="fa-brands fa-twitter"></i></a>
                               <a href="#"><i class="fa-brands fa-instagram"></i></a>
                               <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="bd-team__content">
                      <h4><a href="team-details.html">Peter Anderson</a></h4>
                      <span>Farmer</span>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="bd-team__wrapper text-center  mb-30">
                   <div class="bd-team__thumb w-img p-relative">
                      <a href="team-details.html"><img src="{{url('public/assets/img/team/team-thumb-03.jpg')}}" alt="team-thumb"></a>
                      <div class="bd-content__inner">
                         <div class="bd-team__share">
                            <a href="team-details.html"><i class="fa-light fa-share-nodes"></i></a>
                            <div class="bd-team__action">
                               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                               <a href="#"><i class="fa-brands fa-twitter"></i></a>
                               <a href="#"><i class="fa-brands fa-instagram"></i></a>
                               <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="bd-team__content">
                      <h4><a href="team-details.html">Anzila Yatrian</a></h4>
                      <span>Sr. Farmer</span>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="bd-team__wrapper text-center  mb-30">
                   <div class="bd-team__thumb w-img p-relative">
                      <a href="team-details.html"><img src="{{url('public/assets/img/team/team-thumb-04.jpg')}}" alt="team-thumb"></a>
                      <div class="bd-content__inner">
                         <div class="bd-team__share">
                            <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                            <div class="bd-team__action">
                               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                               <a href="#"><i class="fa-brands fa-twitter"></i></a>
                               <a href="#"><i class="fa-brands fa-instagram"></i></a>
                               <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="bd-team__content">
                      <h4><a href="team-details.html">Johnson Abert</a></h4>
                      <span>Sr. Farmer</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Team-area-end -->
 </main>
 <!-- Body main wrapper end -->
@endsection