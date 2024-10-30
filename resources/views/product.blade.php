@extends('layouts.master')

@section('content')
<div class="slider-sub ">
    <div class="bg-img"> <img src="assets/images/banner/1920x400.png" alt="banner"></div>
    <div class="container"> 
      <div class="heading-nav gap-4 mt-32"><a class="hover-underline caption1 text-white" href="index.html">Home</a><i class="ph ph-caret-double-right text-white"></i>
        <div class="caption1 text-white">Case Studies</div>
      </div>
      <div class="text-nav"> 
        <div class="heading3 text-white">Case Studies</div>
        <div class="sub-heading mt-8 text-white fw-400">Discover our collection of compelling Case Studies showcasing our successful projects and the positive impact we've made for our clients.</div>
      </div>
    </div>
  </div>
  <div class="case-studies-block style-two mt-100">
    <div class="container"> 
      <div class="list-nav flex-center gap-8">
        <div class="nav-item text-button-small text-secondary pt-8 pb-8 pl-20 pr-20 pointer" data-name="all">All</div>
        <div class="nav-item text-button-small text-secondary pt-8 pb-8 pl-20 pr-20 pointer" data-name="investing">Investing</div>
        <div class="nav-item text-button-small text-secondary pt-8 pb-8 pl-20 pr-20 pointer active" data-name="fintech">Fintech</div>
        <div class="nav-item text-button-small text-secondary pt-8 pb-8 pl-20 pr-20 pointer" data-name="crypto">Crypto</div>
        <div class="nav-item text-button-small text-secondary pt-8 pb-8 pl-20 pr-20 pointer" data-name="blockchain">Blockchain</div>
        <div class="nav-item text-button-small text-secondary pt-8 pb-8 pl-20 pr-20 pointer" data-name="planning">Planning</div>
      </div>
      <div class="row mt-40 row-gap-40">
        <div class="col-12 col-xl-4 col-sm-6 item-filter" data-name="fintech">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter" data-name="fintech">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter" data-name="fintech">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter" data-name="fintech">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter" data-name="fintech">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter" data-name="fintech">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="investing">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="investing">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="investing">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="investing">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="investing">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="investing">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="crypto">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="crypto">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="crypto">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="crypto">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="crypto">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="crypto">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="blockchain">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="blockchain">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="blockchain">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="blockchain">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="blockchain">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="blockchain">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="planning">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="planning">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="planning">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="planning">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="planning">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="planning">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Business Succession Planning</div>
              <div class="body2 text-secondary mt-8">Made Financial Planning</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Retirement Planning Strategies</div>
              <div class="body2 text-secondary mt-8">Account management tools</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-sm-6 item-filter hide" data-name="all">
          <div class="item-main"> 
            <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="assets/images/blog/410x260.png" alt=""><a class="flex-columns-center pt-32 pb-32 pl-20 pr-20 bg-white bora-50 text-center" href="case-studies-detail.html">
                <div class="text-button-small text-blue">Discovery</div><i class="ph-bold ph-arrow-up-right text-blue"></i></a></div>
            <div class="infor bg-white bora-8 pt-24">
              <div class="heading6">Tax Optimization Solutions</div>
              <div class="body2 text-secondary mt-8">Retirement Planning</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection