
  
       

<nav class="navbar navbar-default samakal-nav largeDeviceMenu navbar-fixed-top "
style="background-color: white;border-bottom: 3px solid green">
<div class="updatebar" style="background-color: white; color: white;height: 30px;border-bottom: 1px solid #e9e4df;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="updatebar-wraper clearfix">
                    <div class="pull-left" style="padding-top: 2px; padding-bottom: 0px;line-height: 21px;">
                        <span class="theme-site-intro"><i class="fa fa-map-marker"></i> &nbsp;ঢাকা</span>
                        <span class="theme-site-intro"><i class="fa fa-calendar"></i> &nbsp;
                            <!-- শুক্রবার, ২৫ ফেব্রুয়ারি ২০২২ -->
                            {{-- $bongabda->getDateTime()->Format('l, jS F Y ');}} ||
                            {{ $bongabda->format('l jS F Y ') --}}
                        </span>
                        <!--<span class="tp-tab hidden-xs"> । <a href="todays-print-edition.html" target="_blank"-->
                        <!--        style="text-decoration: none;" title="Todays Paper" class="p-con"> আজকের-->
                        <!--        পত্রিকা</a></span>-->
                        <!--<span class="tp-tab hidden-xs"> । <a href="https://epaper.com/" target="_blank"-->
                        <!--        style="text-decoration: none;" title="ePaper" class="p-con"> ই-পেপার </a></span>-->
                        <!--<span class="tp-tab hidden-xs"> । <a href="archivea4d9.html?date=2022-02-25"-->
                        <!--        style="text-decoration: none;" title="Archive" class="p-con"> আর্কাইভ </a></span>-->
                        <span class="tp-tab hidden-xs"> । <a href="bangla-font.html" target="_blank"
                                style="text-decoration: none;" title="" class="p-con hidden991"><i
                                    class="fa fa-download"
                                    style="font-size: 14px; vertical-align: unset;"></i>&nbsp;Bangla Font</a></span>
                        <!--<span class="tp-tab hidden-xs"> । <a href="unicode-converter.html" target="_blank"-->
                        <!--        style="text-decoration: none;" title="" class="p-con hidden991">ইউনিকোড-->
                        <!--        কনভার্টার</a></span>-->
                        <span class="tp-tab hidden-xs"> । <a href="video-gallery.html" target="_blank"
                                style="text-decoration: none; color: #ff8c00" title=""
                                class="p-con hidden991">ভিডিও</a></span>
                    </div>
                    <div class="pull-right hidden-xs" style="padding-top: 4px;">
                        <span><a href="https://www.facebook.com/" target="_blank" style="text-decoration: none;"
                                title="Rajneeti Facebook"><i class="fa fa-facebook-official"
                                    style="color: #3B5998;font-size: 20px" aria-hidden="true"></i></a></span>
                        <span style="margin-left: 2px"><a href="https://twitter.com/" target="_blank"
                                style="text-decoration: none;color: black" title="Rajneeti Twitter"><i
                                    class="fa fa-twitter-square"
                                    style="color: #1DA1F2;font-size: 20px"></i></a></span>
                        <span style="margin-left: 2px"><a href="https://www.youtube.com/" target="_blank"
                                style="text-decoration: none;color: black" title="Rajneeti Youtube"><i
                                    class="fa fa-youtube-square"
                                    style="color: #CC181E;font-size: 20px"></i></a></span>
                        <span style="margin-left: 2px"><a href="https://www.instagram.com/" target="_blank"
                                style="text-decoration: none;color: black" title="Rajneeti Instagram"><i
                                    class="fa fa-instagram" style="color: #CC181E;font-size: 20px"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="navbar-header">
        <!-- <div class="version-sm"><a href="http://en.samakal.com/">Eng</a> </div> -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a href="{{route('index')}}" class="navbar-brand">
            <img src="{{asset('assets/images/logo-bn.jpg')}}"
                style="padding-top: 6px;margin-top: 5px;height: 35px; width:100px" alt="The Rajneeti">
        </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse" style="margin: auto;">
        <ul class="nav navbar-nav navbar-right samakal-nav-menu">
                       @php
    $categories = $categories->take(9);
    @endphp
         @foreach ($categories  as $categorie )
         <li class="desher-rajneeti">
            <a href="{{route('single', $categorie->id)}}">{{$categorie->category_bn}}</a>
            <ul class="dropdown">
               @foreach ($categorie->subcategories as $subcategory)
               <li><a href="{{route('singlecat', $subcategory->id)}}">{{$subcategory->subcategory_bn??''}}</a></li>
               @endforeach
            </ul>
        </li>
         @endforeach
        
       
            <!-- <li class="triky"><a href="https://epaper.samakal.com/" target="_blank">ই-পেপার</a></li> -->

            <li class="sm-trick" id="samakal-search-trigger"><a style="padding: 14px 12px;font-size: 16px"
                    href="javascript:void(0)" title="serarch rajneeti news"><i class="fa fa-search"></i></a></li>
            <!-- <li class="sm-trick"><a href="http://en.samakal.com/" title="English Version" target="_blank" style="font-family: sans-serif;font-size: 16px"><span style="background-color: #e7e8e2;padding: 3px 10px;border-radius: 2px;color: #ff9614;">English</span></a></li> -->
        </ul>
    </div>
</div>
</nav>




{{-- 
<nav class="navbar navbar-default samakal-nav largeDeviceMenu navbar-fixed-top " style="background-color: white;border-bottom: 3px solid #e18b20">
    <div class="updatebar" style="background-color: white; color: white;height: 30px;border-bottom: 1px solid #e9e4df;">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="updatebar-wraper clearfix">
                   <div class="pull-left" style="padding-top: 2px; padding-bottom: 0px;line-height: 21px;">
                      <span class="theme-site-intro"><i class="fa fa-map-marker"></i> &nbsp;ঢাকা</span>
                      <span class="theme-site-intro"><i class="fa fa-calendar"></i> &nbsp; শুক্রবার, ১৫ এপ্রিল ২০২২</span>
                      <span class="tp-tab hidden-xs"> । <a href="todays-print-edition.html" target="_blank" style="text-decoration: none;" title="Todays Paper" class="p-con"> আজকের পত্রিকা</a></span>
                      <span class="tp-tab hidden-xs"> । <a href="#" target="_blank" style="text-decoration: none;" title="ePaper" class="p-con"> ই-পেপার </a></span>
                      <span class="tp-tab hidden-xs"> । <a href="archive2e21.html?date=2022-04-15" style="text-decoration: none;" title="Archive" class="p-con"> আর্কাইভ </a></span>
                      <span class="tp-tab hidden-xs"> । <a href="bangla-font.html" target="_blank" style="text-decoration: none;" title="" class="p-con hidden991"><i class="fa fa-download" style="font-size: 14px; vertical-align: unset;"></i>&nbsp;Bangla Font</a></span>
                      <span class="tp-tab hidden-xs"> । <a href="unicode-converter.html" target="_blank" style="text-decoration: none;" title="" class="p-con hidden991">ইউনিকোড কনভার্টার</a></span>
                      <span class="tp-tab hidden-xs"> । <a href="video-gallery.html" target="_blank" style="text-decoration: none; color: #ff8c00" title="" class="p-con hidden991">ভিডিও</a></span>
                   </div>
                   <div class="pull-right hidden-xs" style="padding-top: 4px;">
                      <span><a href="https://www.facebook.com/TheDailySamakal" target="_blank" style="text-decoration: none;" title="Samakal Facebook"><i class="fa fa-facebook-official" style="color: #3B5998;font-size: 20px" aria-hidden="true"></i></a></span>
                      <span style="margin-left: 2px"><a href="https://twitter.com/samakaltw" target="_blank" style="text-decoration: none;color: black" title="Samakal Twitter"><i class="fa fa-twitter-square" style="color: #1DA1F2;font-size: 20px"></i></a></span>
                      <span style="margin-left: 2px"><a href="https://www.youtube.com/channel/UCnetEdV8EwzGn36f3pq50ZA?sub_confirmation=1" target="_blank" style="text-decoration: none;color: black" title="Samakal Youtube"><i class="fa fa-youtube-square" style="color: #CC181E;font-size: 20px"></i></a></span>
                      <span style="margin-left: 2px"><a href="https://www.instagram.com/daily_samakal" target="_blank" style="text-decoration: none;color: black" title="Samakal Instagram"><i class="fa fa-instagram" style="color: #CC181E;font-size: 20px"></i></a></span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="container">
       <div class="navbar-header">
          <div class="version-sm"><a href="http://en.samakal.com/">Eng</a> </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('index')}}">
          <img src="{{asset('assets/images/logo-bn.jpg')}}" style="padding-top: 6px;margin-top: 5px;height: 35px" alt="The Daily Samakal">
          </a>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right samakal-nav-menu">
            @foreach($categories as $categorie)
            <li><a href="{{route('singlecat', $categorie->id)}}" >{{$categorie->category_bn}}</a></li>
            @endforeach
             <li class="dropdown mega-dropdown sm-trick">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">অন্যান্য&nbsp;&nbsp;<i class="fa fa-bars" aria-hidden="true" style="font-size: 15px;"></i></a>
                <div class="dropdown-menu mega-dropdown-menu" style="margin-top: 1px;border: none;">
                   <div class="mega-dropdown-menu-inner" style="background-color: #f5f1f1">
                      <div class="container">
                         <div class="menu-inner" style="padding-bottom: 0px">
                            <div class="row">
                               <ul style="padding-left: 0px;margin-top: 10px" class="list-unstyled must-menu">
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="dhaka.html">ঢাকা</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="industry-trade.html">শিল্প-বাণিজ্য</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="education.html">শিক্ষা</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="chittagong.html">চট্টগ্রাম</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="chaturango.html">চতুরঙ্গ</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="interview.html">সাক্ষাৎকার</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="stock-market.html">শেয়ারবাজার</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="crime.html">অপরাধ</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="capital.html">রাজধানী</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="goltable.html">গোলটেবিল</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="samakal-anniversary.html">প্রতিষ্ঠাবার্ষিকী</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="port-city-news.html">বন্দর নগরী</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="t-20.html">টি–টোয়েন্টি বিশ্বকাপ</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="womensday.html">নারী দিবস</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="book-fair-news.html">বইমেলা</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="lifestyle.html">জীবনশৈলী</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="sahitto-o-sangskriti.html">সাহিত্য ও সংস্কৃতি</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="technology.html">প্রযুক্তি</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="whole-country.html">সারাদেশ</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="comments.html">মন্তব্য</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="life-struggle.html">জীবন সংগ্রাম</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="chakri.html">চাকরি</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="shilpomoncho.html">শিল্পমঞ্চ</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="shilpomoncho-shoron.html">স্মরণ</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="travel.html">ভ্রমণ</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="opinion.html">মতামত</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="offbit.html">অফবিট</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="cartoon.html">কার্টুন</a></li>
                                  <li class="col-sm-3" style="padding-top: 8px; padding-bottom: 8px;"><a href="feature.html">ফিচার</a></li>
                               </ul>
                            </div>
                         </div>
                         <div class="hr" style="color: #fff;background: #c1c1c1;background-image: unset;"></div>
                         <div class='row'>
                            <div class="col-md-12">
                               <ul class="list-unstyled list-inline mega-adition must-menu">
                                  <li> <a href="#" title="বিশেষ আয়োজন">বিশেষ আয়োজন</a></li>
                                  <li><a href="#" title="ই-পেপার" target="_blank">ই-পেপার</a></li>
                                  <li>
                                     <a href="photo-gallery.html"><i class="fa fa-camera" aria-hidden="true" title="ছবি" style="color: #662b8e;"></i>&nbsp;ছবি</a>
                                  </li>
                                  <li>
                                     <a href="video-gallery.html"><i class="fa fa-video-camera" aria-hidden="true" title="ভিডিও" style="color: #9c3232;"></i>&nbsp;ভিডিও</a>
                                  </li>
                                  <li>
                                     <a href="live.html"><i class="fa fa-play" aria-hidden="true" title="ফেসবুক লাইভ" style="color: #4267B2;font-size: 17px"></i>&nbsp;ফেসবুক লাইভ</a>
                                  </li>
                                  <li>
                                     <a href="archive2e21.html?date=2022-04-15"><i class="fa fa-file-archive-o" aria-hidden="true" title="আর্কাইভ" style="color: #f44506;"></i>&nbsp;আর্কাইভ</a>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="mega-rest-part"></div>
                </div>
             </li>
             <li class="sm-trick" id="samakal-search-trigger"><a style="padding: 14px 12px;font-size: 16px" href="javascript:void(0)" title="serarch samakal news"><i class="fa fa-search"></i></a></li>
             <li class="sm-trick"><a href="http://en.samakal.com/" title="English Version" target="_blank" style="font-family: sans-serif;font-size: 16px"><span style="background-color: #e7e8e2;padding: 3px 10px;border-radius: 2px;color: #ff9614;">English</span></a></li>
          </ul>
       </div>
    </div>
 </nav> --}}
 <form class="form-search form-inline" id="samakal-search" style="display: none;" role="form" action="" method="get">
    <div class="container">
       <div class="form-group">
          <div class="input-group input-group-unstyled ">
             <input type="text" class="form-control search-text-input" placeholder="কী খুঁজতে চান?" name="q" />
             <span class="input-group-addon form_submit">
             <i class="fa fa-search"></i>
             </span>
             <span class="input-group-addon" id="samakal-search-close">
             <i class="fa fa-close"></i>
             </span>
          </div>
       </div>
    </div>
 </form>
 <div class="wrapper visible-xs">
    <nav id="sidebar" style="background:green!important;">
       <div id="dismiss" style="padding-top: 2px">
          <i class="fa fa-times" style="font-size: 20px"></i>
       </div>
       <div class="sidebar-header" style="padding-bottom: 10px; background:green!important;">
          <h3 style="text-align: left;margin-bottom: 0px;margin-top: 9px;">
             <a href="{{route('index')}}"><img src="{{asset('assets/images/logo-bn.jpg')}}" class="img-responsive" style="height: 18px;"></a>
          </h3>
       </div>
       <div>
          <div class="menuNew panel-group" id="accordion" role="tablist" aria-multiselectable="true">
             <table class="table menuTable">

             
               @foreach($categories as $categorie)

               <tr>
                  <td style="padding: 10px 0px !important;"><a style="font-size: 22px;color: white;padding: 10px 20px !important;" href="{{route('singlecat', $categorie->id)}}" class="parentMenu"> {{$categorie->category_bn}}</a> </td>
               </tr>
               @if (count($categorie->subcategories))
               
            <tr>
               <td>
                  <p style="margin-bottom: 0px">
                     <a style="display: inline-block;width: 80%;font-size: 22px;color: white;padding: 0px 10px !important;text-decoration: none;" class="parentMenu" role="tab" id="headingAllCategory" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseAllCategory{{$categorie->id}}" aria-expanded="true" aria-controls="collapseAllCategory"> {{$categorie->category_bn}}<i class="fa fa-caret-down" style="float: right;margin-top: 4px;"></i></a>
                  </p>
                  <div id="collapseAllCategory{{$categorie->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAllCategory">
                     <ul class="list-group" style="list-style-type:none !important;">
                        @foreach ($categorie->subcategories as $subcategory)
                        <li style="margin-bottom: 0px"><a style="display: inline-block;width: 80%;font-size: 22px;color: #c6baba;padding: 0px 10px 0px 20px !important;" href="{{route('singlecat', $subcategory->id)}}" class="parentMenu">{{$subcategory->subcategory_bn??''}}</a></li>
                        @endforeach
                     

                     </ul>
                  </div>
               </td>
            </tr>
            @endif
               
               @endforeach
             
              

                <tr>
                   <td>
                      <p style="margin-bottom: 0px"><a style="display: inline-block;width: 80%;font-size: 22px;color: white;padding: 0px 10px !important;" href="video-gallery.html" class="parentMenu"> ভিডিও</a></p>
                   </td>
                </tr>
                <tr>
                   <td>
                      <p style="margin-bottom: 0px"><a style="display: inline-block;width: 80%;font-size: 22px;color: white;padding: 0px 10px !important;" href="archive.html" class="parentMenu"> আর্কাইভ</a></p>
                   </td>
                </tr>
                <tr>
                   <td>
                      <p style="margin-bottom: 0px"><a style="display: inline-block;width: 80%;font-size: 22px;color: white;padding: 0px 10px !important;" href="photo-gallery.html" class="parentMenu"> ছবি</a></p>
                   </td>
                </tr>
             </table>
          </div>
       </div>
    </nav>
    <div class="overlay"></div>
    <div id="content">
       <nav class="navbar navbar-expand-lg navbar-light bg-light" style="min-height: unset !important;">
          <div class="mobile-navbar" style=" width: 100%;background-color: green;top: -1px;z-index: 997;height: 55px !important;position: fixed;padding-left: 5px;padding-right: 5px; ">
             <table class="table" style="border: hidden;">
                <tr>
                   <td style="width: 10%;padding-top: 13px">
                      <span id="sidebarCollapse" class="glyphicon glyphicon-align-justify" style="font-size:20px;cursor:pointer;border-radius: 0px;color: white !important" onclick="if (!window.__cfRLUnblockHandlers) return false; openNav()" data-cf-modified-64be04fe67eeeb90958ddfe0-=""></span>
                   </td>
                   <td style="padding-top: 16px">
                      <a class="clickMenu" href="{{route('index')}}"><img src="{{asset('assets/images/logo-bn.jpg')}}" class="img-responsive" style="height: 23px;"></a>
                   </td>
                   <td style="width: 10%;padding-top: 15px;">
                      <a class="customMenuHover" href="https://en.samakal.com/" target="_blank" style="color: white !important"><span class="en-edition" style="font-size: 20px"> EN </span></a>
                   </td>
                   <td style="width: 6%;padding-top: 16px;padding-left: 0px;padding-right: 0px">
                      <a class="customMenuHover" href="search.html" style="color: white !important"><span class="en-edition" style="font-size: 16px"> <i class="fa fa-search"></i> </span></a>
                   </td>
                   <td style="width: 10%;padding-top: 17px;">
                      <a class="customMenuHover refreshWindow" href="index.html" style="color: white !important;text-decoration: none;"><span class="en-edition" style="font-size: 17px"> <i class="fa fa-refresh"></i> </span></a>
                   </td>
                </tr>
             </table>
          </div>
       </nav>
    </div>
 </div>


 <script type="64be04fe67eeeb90958ddfe0-text/javascript">
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-9442091006829624",
        enable_page_level_ads: true
    });
 </script>
 <script async src="../securepubads.g.doubleclick.net/tag/js/gpt.js" type="64be04fe67eeeb90958ddfe0-text/javascript"></script>
 <script type="64be04fe67eeeb90958ddfe0-text/javascript">
    window.googletag = window.googletag || {cmd: []};
    googletag.cmd.push(function() {
        googletag.defineSlot('/21871422770/samakal_ad8_660x440', [660, 440], 'div-gpt-ad-1623651094811-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad9_320x480', [320, 480], 'div-gpt-ad-1623651200319-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad12_square', [320, 100], 'div-gpt-ad-1624603908104-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
 </script>
 <script async src="../securepubads.g.doubleclick.net/tag/js/gpt.js" type="64be04fe67eeeb90958ddfe0-text/javascript"></script>
 <script type="64be04fe67eeeb90958ddfe0-text/javascript">
    window.googletag = window.googletag || {cmd: []};
    googletag.cmd.push(function() {
        googletag.defineSlot('/21871422770/samakal_ad5_320x100', [320, 100], 'div-gpt-ad-1623219041892-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad10_square', [300, 250], 'div-gpt-ad-1631343939080-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad11_square', [[300, 250], [320, 100]], 'div-gpt-ad-1624257459507-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad13_horizontal', [[728, 90], [970, 90]], 'div-gpt-ad-1625304232947-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad15', [300, 250], 'div-gpt-ad-1630742157659-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad16', [[320, 100], [300, 250]], 'div-gpt-ad-1630742738895-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad17', [320, 100], 'div-gpt-ad-1631774130797-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad21', [728, 90], 'div-gpt-ad-1635404508934-0').addService(googletag.pubads());
        googletag.defineSlot('/21871422770/samakal_ad24', [300, 250], 'div-gpt-ad-1638174366750-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
 </script>
 <script async src='cdn-cgi/challenge-platform/h/b/scripts/invisible2dad.js?ts=1650034800'></script>
</head>
<body>
 <script type="64be04fe67eeeb90958ddfe0-text/javascript">
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '276108213069474',
            xfbml      : true,
            version    : 'v3.2'
        });
        FB.AppEvents.logPageView();
    };
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "../connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
 </script>