<!DOCTYPE html>
<html lang="en">
@include('dashboard.includes.links')
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  @include('dashboard.includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('dashboard.includes.sidebar')
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
  @include('dashboard.includes.content-head')
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        @yield('content')
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('dashboard.includes.sidebar-right')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('dashboard.includes.scripts')
</body>
</html>