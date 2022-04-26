<div class="bg-white" style="padding: 15px 0px">
	<div class="container">
	<div class="row xs-marginL0 xs-marginR0" style="padding-top: 10px;padding-bottom: 20px">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 res-xs-btm">
	<div class="homeBangladeshCategoryPadding" style="background-color: white">
	<p style="margin-top: 5px;border-left: 30px solid green;line-height: 8px !important;margin-bottom: 20px">
	<span style="font-size: 22px;line-height: unset;margin-left: 10px"><a href="technology.html" class="textDecorationNone colorBlackHoverOrange">প্রযুক্তি</a></span>
	<span style="font-size: 22px;line-height: unset;margin-left: 10px;float: right;margin-top: -4px"><a href="technology.html" class="textDecorationNone colorBlackHoverOrange">আরও <i class="fa fa-caret-right fontSize18"></i></a></span>
	</p>
	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 flex-col xs-paddingB0">

	<div class="row flex-row res-sm first3-md-gap-parent">

@foreach($projuctis as $projucti)
	<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 flex-col res-xs-btm res-sm-btm first3-md-gap sports-news xs-last2paddingB0">
	<div class="news-content" style="background-color: #f4f4f4;box-shadow: unset;border: none;border-radius: 3px">
	<div class="positionRelative">
	<img src="{{asset($projucti->image)}}" alt="{{$projucti->title_bn}}" style="border-color: #808B96;border:none;border-top-left-radius: 3px;border-top-right-radius: 3px;">
	</div>
	<div class="info">
	<h3 class="heading fontSize23 lineHeight22" style="padding-bottom: 10px"> {{$projucti->title_bn}}</h3>
	</div>
	<a href="#.html" class="link-overlay"></a>
	<p class="time">
	<i class="fa fa-clock-o timeIcon"></i>&nbsp; <span>{{$projucti->post_date}}</span> </p>
	</div>
	</div>
@endforeach
	
	</div> <!-- secondend row -->
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>