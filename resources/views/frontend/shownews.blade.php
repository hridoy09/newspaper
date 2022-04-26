@extends('frontend.layout.app')
 @section('content')
 <style>
   main img {
  height: 100%;
  width: 100%;
}





#image-grid img {
  width: 100%;
  height: 80px;
}

#blog-cards img {
  width: 100%;
  height: 300px;
}
.show {
  display: block;
}
 </style>

<main style="margin:90px 90px 0px 90px">
    <div class="grid grid-cols-1 md:grid-cols">
      <!-- RECENT POST -->
      <section class="md:col-span-2 md:mx-12 my-4 md:my-12 p-6 md:px-8 bg-gray-100 md:shadow-lg">
               <h1 class="text-3xl border-b-2 border-indigo-300 w-3/4 md:w-1/2 my-4">{{$posts->title_bn}}</h1>
        <img src="{{asset($posts->image)}}" alt="" class="mx-w-100 py-2">
 
   
        <small class="text-xs text-gray-700">{{$posts->created_at}}</small>
        <p class="text-base mt-2">{!!$posts->details_bn!!} </p>
  
      </section>

 


      </div>
</main>
@endsection