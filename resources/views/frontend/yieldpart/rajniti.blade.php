<div class="bg-white" style="padding: 15px 0px">
    <div class="container">
        <div class="row xs-marginL0 xs-marginR0" style="padding-top: 10px;padding-bottom: 20px">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <div class="homeBangladeshCategoryPadding" style="background-color: white">
                    <p
                        style="margin-top: 5px;border-left: 30px solid green;line-height: 8px !important;margin-bottom: 20px">
                        <span style="font-size: 22px;line-height: unset;margin-left: 10px"><a href="politics.html"
                                class="textDecorationNone colorBlackHoverOrange">রাজনীতি</a></span>
                        <span
                            style="font-size: 22px;line-height: unset;margin-left: 10px;float: right;margin-top: -4px"><a
                                href="politics.html" class="textDecorationNone colorBlackHoverOrange">আরও <i
                                    class="fa fa-caret-right fontSize18"></i></a></span>
                    </p>
                    <div class="row flex-row" style="margin-bottom: 20px">

                        <div class="  col-xs-12 col-sm-6 col-md-6 col-lg-6 " style="padding-right: 0px">
                            <div class="news-content"
                                style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px;height: 100%">
                                <a href=""><img src="{{asset($rajnitis1->image??'')}}"
                                        class="img-responsive img-btm" alt="{{$rajnitis1->title_bn?? ''}}"
                                        title="{{$rajnitis1->title_bn?? ''}}"
                                        style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-bottom-left-radius: 3px;"></a>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3    hoverOrange" style="padding-left: 0px;">
                            <div class="info"
                                style="margin: 0px;background-color: #f4f4f4;padding-left: 10px;padding-right: 10px;height: 100%;border-top-right-radius: 3px;border-bottom-right-radius: 3px;">
                                <h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px">
                                    {{$rajnitis1->title_bn??''}}</h3>
                                <p class="fontSize20">{{$rajnitis1->title_bn??''}}</p>
                            </div>
                            <a href="{{route('shownews', $rajnitis1->id??'')}}" class="link-overlay"></a>
                            <p class="time">
                                <i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>{{$rajnitis1->post_date??''}}</span>
                            </p>
                        </div>

                        <div
                            class=" col-xs-12  col-sm-6  col-md-3 col-lg-3  flex-col res-xs-btm res-sm-btm first3-md-gap sports-news xs-last2paddingB0">
                            <div class="news-content"
                                style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px">
                                <div class="positionRelative">
                                    <img src="{{$rajnitis2->image??''}}" alt="{{$rajnitis1->title_bn??''}}"
                                        title="{{$rajnitis1->title_bn??''}}"
                                        style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                                </div>
                                <div class="info">
                                    <h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px">
                                        {{$rajnitis1->title_bn??''}}</h3>
                                </div>
                                <a href="{{route('shownews', $rajnitis1->id??'')}}" class="link-overlay"></a>
                                <p class="time">
                                    <i class="fa fa-clock-o timeIcon"></i>&nbsp; <span{{$rajnitis1->post_date??''}}</span> </p>
                            </div>
                        </div>
                    </div> <!-- end row -->



                    <!-- ........................................... -->
                    <div class="row flex-row res-sm first3-md-gap-parent">
                        @foreach($rajnitis as $rajniti)
                        <div
                            class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-col res-xs-btm res-sm-btm first3-md-gap sports-news xs-last2paddingB0">
                            <div class="news-content"
                                style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px">
                                <div class="positionRelative">
                                    <img src="{{asset($rajniti->image??'')}}" alt="{{$rajniti->title_bn??''}}"
                                        title="{{$rajniti->title_bn??''}}"
                                        style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-top-right-radius: 3px;">
                                </div>
                                <div class="info">
                                    <h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px">
                                        {{$rajniti->title_bn ?? ''}}</h3>
                                </div>
                                <a href="{{route('shownews', $rajniti->id??'')}}" class="link-overlay"></a>
                                <p class="time">
                                    <i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>{{$rajniti->post_date??''}}/span> </p>
                            </div>
                        </div>
                        @endforeach

                        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 flex-col res-xs-btm res-sm-btm first3-md-gap sports-news xs-last2paddingB0">
	<div class="news-content" style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px">
	<div class="positionRelative">
	<img src="https://samakal.com/uploads/2022/02/online/thumbnails/BJP-samakal-62173608b8627.jpg" class="img-responsive img-btm" alt="সন্ত্রাসবাদের বিরুদ্ধে একসঙ্গে লড়াই করতে হবে" title="সন্ত্রাসবাদের বিরুদ্ধে একসঙ্গে লড়াই করতে হবে" style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-top-right-radius: 3px;">
	</div>
	<div class="info">
	<h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px"><span class="colorRed verticalBaseline fontSize23">﻿বিজেপির সঙ্গে আ.লীগের আলোচনা <span class="verticalTop fontSize12">/</span> </span> সন্ত্রাসবাদের বিরুদ্ধে একসঙ্গে লড়াই করতে হবে</h3>
	</div>
	<a href="politics/article/220298157/%e0%a6%b8%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%b8%e0%a6%ac%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%ac%e0%a6%bf%e0%a6%b0%e0%a7%81%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a7%87-%e0%a6%8f%e0%a6%95%e0%a6%b8%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a7%87-%e0%a6%b2%e0%a6%a1%e0%a6%bc%e0%a6%be%e0%a6%87-%e0%a6%95%e0%a6%b0%e0%a6%a4%e0%a7%87-%e0%a6%b9%e0%a6%ac%e0%a7%87.html" class="link-overlay"></a>
	<p class="time">
	<i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>আপডেট ২৪ ফেব্রুয়ারি ২২ । ১৩:৩৮</span> </p>
	</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 flex-col res-xs-btm res-sm-btm first3-md-gap sports-news xs-last2paddingB0">
	<div class="news-content" style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px">
	<div class="positionRelative">
	<img src="https://samakal.com/uploads/2022/02/online/thumbnails/Bam-Jote-samakal-6216637fabb3a.jpg" class="img-responsive img-btm" alt="বাম জোটের হরতাল-ঘেরাও কর্মসূচি মার্চে" title="বাম জোটের হরতাল-ঘেরাও কর্মসূচি মার্চে" style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-top-right-radius: 3px;">
	</div>
	<div class="info">
	<h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px"> বাম জোটের হরতাল-ঘেরাও কর্মসূচি মার্চে</h3>
	</div>
	<a href="politics/article/220298088/%e0%a6%ac%e0%a6%be%e0%a6%ae-%e0%a6%9c%e0%a7%8b%e0%a6%9f%e0%a7%87%e0%a6%b0-%e0%a6%b9%e0%a6%b0%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%98%e0%a7%87%e0%a6%b0%e0%a6%be%e0%a6%93-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%b8%e0%a7%82%e0%a6%9a%e0%a6%bf-%e0%a6%ae%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%9a%e0%a7%87.html" class="link-overlay"></a>
	<p class="time">
	<i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>আপডেট ২৩ ফেব্রুয়ারি ২২ । ২২:৪০</span> </p>
	</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 flex-col res-xs-btm res-sm-btm first3-md-gap sports-news xs-last2paddingB0">
	<div class="news-content" style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px">
	<div class="positionRelative">
	<img src="https://samakal.com/uploads/2022/02/online/thumbnails/Untitled-9-samakal-6216613b5fc00.jpg" class="img-responsive img-btm" alt="খাদ্যপণ্যের দাম বৃদ্ধির প্রতিবাদে গণপ্রতিরোধ গড়ুন: মেনন" title="খাদ্যপণ্যের দাম বৃদ্ধির প্রতিবাদে গণপ্রতিরোধ গড়ুন: মেনন" style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-top-right-radius: 3px;">
	</div>
	<div class="info">
	<h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px"> খাদ্যপণ্যের দাম বৃদ্ধির প্রতিবাদে গণপ্রতিরোধ গড়ুন: মেনন</h3>
	</div>
	<a href="politics/article/220298081/%e0%a6%96%e0%a6%be%e0%a6%a6%e0%a7%8d%e0%a6%af%e0%a6%aa%e0%a6%a3%e0%a7%8d%e0%a6%af%e0%a7%87%e0%a6%b0-%e0%a6%a6%e0%a6%be%e0%a6%ae-%e0%a6%ac%e0%a7%83%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%bf%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%ac%e0%a6%be%e0%a6%a6%e0%a7%87-%e0%a6%97%e0%a6%a3%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%b0%e0%a7%8b%e0%a6%a7-%e0%a6%97%e0%a7%9c%e0%a7%81%e0%a6%a8-%e0%a6%ae%e0%a7%87%e0%a6%a8%e0%a6%a8.html" class="link-overlay"></a>
	<p class="time">
	<i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>আপডেট ২৩ ফেব্রুয়ারি ২২ । ২২:৩৫</span> </p>
	</div>
	</div> -->
                    </div> <!--  //end second row -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <div class="adv text-center" style="margin-top: 35px">
                    <a href="https://waltonbd.com/washing-machine" target="_blank"><img
                            src="assets/adv/Walton-300x250-2021-11-27.jpg" alt="walton" title="walton"
                            class="img-responsive" border="0"></a>
                </div>
            </div>
        </div>
    </div>
</div>



















<div class="bg-white" style="padding: 20px 0px;background-color: #f4f4f4;border:none;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="adv text-center">
                    <script async="" src="../pagead2.googlesyndication.com/pagead/js/f.txt" type="text/javascript">
                    </script>

                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9442091006829624"
                        data-ad-slot="2957147629" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script type="text/javascript">
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
