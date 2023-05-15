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
        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Create Account <i class="fas fa-plus"></i></a>  -->
        <!-- <button type="button" class="btn btn-outline-secondary" id="searchButton">Search <i class="fas fa-search"></i></button> -->
    </span>
</div>
<div class="card-body">
    <div class="row mb-3" id="searchBody" style="display:none">
        <div class="col-md-2"><input type="text" name="qaime" class="form-control" placeholder="Qaimə №" autocomplete="off"></div>
        <div class="col-md-3"><input type="date" name="tarix" id="tarix" class="form-control"></div>
        <div class="col-md-3">
            <select class="select2" name="musteri" style="width:100%">
                <option value="">Heç biri</option>
                <option value="Ismayil">Ismayil</option>
                
            </select>
        </div>
        <div class="col-md-3">
            <select class="select2" id="select2" name="erazi" style="width:100%">
                <option value="">Heç biri</option>
                <option value="Baku">Baku</option>
            </select>
        </div>
        <div class="col-md-1"><button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button></div>
    </div>

    
</div>
</section>
</div>
<script>
$(document).ready(function(){
    $(".select2").select2();
    $("#searchButton").on("click",function(){
        if($("#searchBody").attr("style")) $("#searchBody").removeAttr("style");
        else $("#searchBody").attr("style","display:none");
    });
}); 
</script>