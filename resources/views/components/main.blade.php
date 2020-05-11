<!DOCTYPE html>
<html lang="en">

@include('components.head')
@include('components.style')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    @if (Auth::user()->isAdmin())
      @include('components.sidebar.admin')
    @else
      @include('components.sidebar.operator')
    @endif

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @include('components.navbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">
            @include('components.notification')
            @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     @include('components.footer')

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tutup Sesi?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "log keluar" dibawah untuk akhiri sesi ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="{{ route('logout') }}">Log Keluar</a>
        </div>
      </div>
    </div>
  </div>

@include('components.script')

</body>

</html>
