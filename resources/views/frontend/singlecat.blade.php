@extends('frontend.layout.app')
 @section('content')
 

<div class="main-div" style="background-color: #F4F4F4">
   
       
    
      
        <div style="background-color: #E7E8E2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                   
                        {{-- <div class="row hidden-xs" style="padding: 5px; padding-top: 5px;">
                            <div class="col-md-12">
                                <div class="adv text-center">
                                    <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt" type="f66223373f44f3c92a1047d8-text/javascript"></script>
                                    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-9442091006829624" data-ad-slot="7327875150"></ins>
                                    <script type="f66223373f44f3c92a1047d8-text/javascript">
                                                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row categoryPageListNews" style="margin-top: 90px">
                            <div class="col-md-12">

                                @foreach ($posts as $post)
                             <a href="{{route('shownews',$post->id)}}">
                                <div class="media news-content child-cat-list hoverNewsIconStyle" style="background-color: #FFF;border: none;box-shadow: unset;padding: 10px">
                                    <div class="media-left">
                                        <img  src="{{asset($post->image)}}" alt="জামিন পেলেন বিএনপি নেতা ইশরাক" title="জামিন পেলেন বিএনপি নেতা ইশরাক" class="media-object imgResponsiveSize img-btm-r img-60" style="width:250px">
                                    </div>
                                    <div class="media-body" style="position: relative;">
                                        <h4 class="heading listnews-heading">{{$post->title_bn}}</h4>
                                        <!--<p class="summary  hide-min">{!!$post->details_bn!!}</p>-->
                                        <p class="time hide-min" style="padding-left:8px;">
                                        <i class="fa fa-clock-o"></i>{{$post->post_date}}</p>
                                    </div> 
                                </div>
                                 </a>   
                                @endforeach
                           
                             
                        
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

    <div class="d-flex">
        {!! $posts->links() !!}
    </div>

</div>
@endsection