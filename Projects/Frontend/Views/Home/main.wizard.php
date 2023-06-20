<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <a href="{{URL::base('Home/exit/1')}}">Bütün cihazlardan çıx</a>
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Blank Page accounts</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('home')}}">{{ML::select('Home')}}</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>
        </div>
    </div>
</section>
<section class="content">
  <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-plus"></i>
          </button>
          <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        Start creating your amazing application!
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
  </div>
</section>
</div>
<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
<script>
  var socket = io('http://194.163.181.227:80');
  console.log(socket);
</script>