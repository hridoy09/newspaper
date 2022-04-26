<div class="bg-white" style="padding: 15px 0px">
	<div class="container">
	<div class="row xs-marginL0 xs-marginR0" style="padding-top: 10px;padding-bottom: 20px">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="homeBangladeshCategoryPadding" style="background-color: white">
	<p style="margin-top: 5px;border-left: 30px solid green;line-height: 8px !important;margin-bottom: 20px">
	<span style="font-size: 22px;line-height: unset;margin-left: 10px"><a href="special-ayojon.html" class="textDecorationNone colorBlackHoverOrange">বিশেষ আয়োজন</a></span>
	<span style="font-size: 22px;line-height: unset;margin-left: 10px;float: right;margin-top: -4px"><a href="special-ayojon.html" class="textDecorationNone colorBlackHoverOrange">আরও <i class="fa fa-caret-right fontSize18"></i></a></span>
	</p>

	<div class="row flex-row" style="margin-bottom: 20px">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 0px">
	<div class="news-content" style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px;height: 100%">
	<a href="{{route('shownews', $bisheshayojons1->id??'')}}">
	<div class="positionRelative">
	<img src="{{asset($bisheshayojons1->image??'')}}" alt="{{$bisheshayojons1->title_bn??''}}" title="{{$bisheshayojons1->title_bn??''}}" style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-bottom-left-radius: 3px;">
	</div>
	</a>
	</div>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hoverOrange" style="padding-left: 0px;">
	<div class="info" style="margin: 0px;background-color: #f4f4f4;padding-left: 10px;padding-right: 10px;height: 100%;border-top-right-radius: 3px;border-bottom-right-radius: 3px;">
	<h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px"><span class="colorRed verticalBaseline fontSize23">একুশে ফেব্রুয়ারি <span class="verticalTop fontSize12">/</span> </span>{{$bisheshayojons1->title_bn??''}}</h3>
	</div>
	<a href="{{route('shownews', $bisheshayojons1->id??'')}}" class="link-overlay"></a>
	<p class="time">
	<i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>{{$bisheshayojons1->post_date??''}}/span> </p>
	</div>
<!-- two......
 -->
 @foreach($bisheshayojons2 as $bisheshayojon2)
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-col res-xs-btm res-sm-btm first3-md-gap sports-news xs-last2paddingB0">
	<div class="news-content" style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px">
	<div class="positionRelative">
	<img src="{{asset($bisheshayojon2->image??'')}}" alt="{{$bisheshayojon2->title_bn}}" title="{{$bisheshayojon2->title_bn}}" style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-top-right-radius: 3px;">
	</div>
	<div class="info">
	 <h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px"><span class="colorRed verticalBaseline fontSize23">ভাষা আন্দোলন <span class="verticalTop fontSize12">/</span> </span>{{$bisheshayojon2->title_bn}}</h3>
	</div>
	<a href="{{route('shownews', $bisheshayojon2->id??'')}}" class="link-overlay"></a>
	<p class="time">
	<i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>{{$bisheshayojon2->post_date??''}}</span> </p>
	</div>
	</div>

@endforeach
	</div>	<!-- //end row-->


	</div> 

	<div class="row flex-row res-sm first3-md-gap-parent"> <!-- //start lower part row start -->
@foreach($bisheshayojons as $bisheshayojon)
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 flex-col res-xs-btm res-sm-btm first3-md-gap sports-news xs-last2paddingB0">
	<div class="news-content" style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px">
	<div class="positionRelative">
	<img src="{{asset($bisheshayojon->image??'')}}" alt="{{$bisheshayojon->title_bn??''}}" title="{{$bisheshayojon->title_bn??''}}" style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-top-right-radius: 3px;">
	</div>
	<div class="info">
	<h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px"><span class="colorRed verticalBaseline fontSize23"><!-- সংস্কৃতি <span class="verticalTop fontSize12">/</span> --> </span> {{$bisheshayojon->title_bn}}</h3>
	</div>
	<a href="{{route('shownews', $bisheshayojon->id??'')}}" class="link-overlay"></a>
	<p class="time">
	<i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>{{$bisheshayojon->post_date??''}}</span> </p>
	</div>
	</div>
@endforeach
	</div><!--  //end lower part -->
	</div>
	</div>
	</div>
	</div>
	</div>