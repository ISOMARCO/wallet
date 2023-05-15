<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Account Create</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('accounts')}}">{{ML::select('Accounts')}}</a></li>
            <li class="breadcrumb-item active">Account yarat</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card card-info">
        <div class="card-header">Account Əlavə Et</div>
        <div class="card-body">
            <span id="msg" style="font-weight:bold"></span>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="name" class="input-group-text">Name <i class="fas fa-piggy-bank"></i></label>
                </div>
                <select name="name" id="name select2" class="form-control">
                    <option value="icarə">RabitaBank</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="musteri" class="input-group-text">Müştəri <i class="fas fa-user-tie"></i></label>
                </div>
                <select name="musteri" id="musteri" class="select2 form-control">
                    <option value="">Musteri</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="tarix" class="input-group-text">Tarix <i class="far fa-calendar-alt"></i></label>
                </div>
                <input type="date" name="tarix" id="tarix" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="erazi" class="input-group-text">Ərazi <i class="fas fa-map-marked-alt"></i></label>
                </div>
                <select name="erazi" id="erazi" class="select2 form-control">
                    <option value="">Erazi</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="unvan" class="input-group-text">Ünvan <i class="fas fa-location-arrow"></i></label>
                </div>
                <input type="text" class="form-control" id="unvan" name="unvan">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="nisan" class="input-group-text">Nişan <i class="fas fa-truck"></i></label>
                </div>
                <input type="text" class="form-control" id="nisan" name="nisan">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="avto" class="input-group-text">Avto <i class="fas fa-car"></i></label>
                </div>
                <input type="text" class="form-control" id="avto" name="avto">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="surucu" class="input-group-text">Sürücü <i class="far fa-id-card"></i></label>
                </div>
                <input type="text" class="form-control" id="surucu" name="surucu">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="qeyd" class="input-group-text">Qeyd <i class="fas fa-clipboard"></i></label>
                </div>
                <textarea name="qeyd" id="qeyd" rows="2" class="form-control"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-info" id="gonder">GÖNDƏR <i class="far fa-paper-plane"></i></button>
            <button type="button" class="btn btn-default float-right" id="reset">SIFIRLA <i class="fas fa-ban"></i></button>
        </div>
    </div>
</section>
</div>
<script>
$(document).ready(function(){
    $("#select2").select2();
}); 
</script>