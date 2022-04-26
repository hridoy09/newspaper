
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('backend.layouts.headerlink')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 

 @guest
        @yield('content')
  @else


<!-- top navbar  Container -->
 @include('backend.layouts.navbar')
 <!-- end top navbar  Container -->

<!-- Main Sidebar Container -->
@include('backend.layouts.sidebar')
<!-- end Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



<!-- Content Header (Page header) -->
    
<!-- এখান থেকে বাদ দিছি  কারণ েএখানে ইল্ড হবে মানে অন্যজায়গা থেকে নিয়ে home thaka আসবে--> 




    
   @yield('content')
  </div>

</div>
<!-- ./wrapper -->
  @include('backend.layouts.footer')
</body>
</html>
@endguest
