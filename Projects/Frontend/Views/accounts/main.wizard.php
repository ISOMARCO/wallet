<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Accounts</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('accounts')}}">{{ML::select('Accounts')}}</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
<div class="card">
<div class="card-header">
    <span class="float-right">
        <a href="{{URL::base('icare/elave_et?nov=icarə')}}" class="btn btn-outline-primary">Create Account <i class="fas fa-plus"></i></a> 
        <button type="button" class="btn btn-outline-secondary" id="axtaris">Search <i class="fas fa-search"></i></button>
    </span>
</div>
<div class="card-body">
    <div class="row mb-3" id="search_body" style="display:none">
        <div class="col-md-2"><input type="text" name="qaime" class="form-control" placeholder="Qaimə №" autocomplete="off"></div>
        <div class="col-md-3"><input type="date" name="tarix" id="tarix" class="form-control"></div>
        <div class="col-md-3">
            <select class="select2" name="musteri" style="width:100%">
                <option value="">Heç biri</option>
                <option value="">Ismayil</option>
                
            </select>
        </div>
        <div class="col-md-3">
            <select class="select2" name="erazi" style="width:100%">
                <option value="">Heç biri</option>
                <option value="">Baku</option>
            </select>
        </div>
        <div class="col-md-1"><button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button></div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
        <h3 class="card-title">
            <img src="{{FILES_DIR.'Accounts/rabitabank.svg'}}" style="width:48px;height:30px;" class="img-fluid" alt="Rabita Bank">
            Rabita Bank Credit
        </h3>

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

    <div class="card collapsed-card">
        <div class="card-header">
        <h3 class="card-title">
            <img src="{{FILES_DIR.'Accounts/birbank.svg'}}" style="width:30px;height:48px;" class="img-fluid" alt="Kapital Bank Birbank">
            Kapital Bank Birbank
        </h3>

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

    <div class="card collapsed-card">
        <div class="card-header">
        <h3 class="card-title">
            <img src="{{FILES_DIR.'Accounts/ucard.webp'}}" style="width:48px;height:30px;" class="img-fluid" alt="Unibank Ucard">
            Unibank Ucard
        </h3>

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
</div>
</section>
</div>
<script>
    //$(".select2").select2();
    $("#axtaris").on("click",function(){
        if($("#axtaris_body").attr("style")) $("#axtaris_body").removeAttr("style");
        else $("#axtaris_body").attr("style","display:none");
    });
</script>