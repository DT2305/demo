<!DOCTYPE html>
<html lang="en">
@include('candidates.includes.links')
<body class="layout-top-nav" style="height: auto;">
<div class="wrapper">

  @include('candidates.includes.navbar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 328.85px;">
  @include('candidates.includes.content-header')
    <!-- Main content -->
    <div class="content">
      <div class="container">
        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('candidates.includes.sidebar-right')
  
  @include('candidates.includes.footer')
  
</div>
<!-- ./wrapper -->

@include('candidates.includes.scripts')
</body>
</html>