<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Category Create</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('Category')}}">{{ML::select('Category')}}</a></li>
            <li class="breadcrumb-item active">Category yarat</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content"> 
    <form method="post" id="createForm">
        <div class="card card-info">
            <div class="card-header">Category Əlavə Et</div>
            <div class="card-body">
                <span id="msg" style="font-weight:bold"></span>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="bank" class="input-group-text">Category&nbsp;<i class="fas fa-cube"></i></label>
                    </div>
                    <select name="bank" id="bank" class="form-control">
                        <option value="">Nothing</option>
                        @foreach($allCategoryByUser as $value)
                        <option value="{{$value->Uid}}">{{$value->Name}}</option>
                        @endforeach 
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="type" class="input-group-text">Type &nbsp;<i class="far fa-credit-card"></i></label>
                    </div>
                    <select name="type" id="type" class="form-control">
                        <option value="DEBIT">Debit</option>
                        <option value="CREDIT">Credit</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="name" class="input-group-text">Name&nbsp;<i class="fas fa-piggy-bank"></i></label>
                    </div>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="input-group mb-3" id="credit_amount_div" style="display:none">
                    <div class="input-group-prepend">
                        <label for="credit_amount" class="input-group-text">Credit Amount&nbsp;<i class="fas fa-hand-holding-usd"></i></label>
                    </div>
                    <input type="number" class="form-control" id="credit_amount" name="credit_amount" value="500">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="balance" class="input-group-text">Balance&nbsp;<i class="fas fa-hand-holding-usd"></i></label>
                    </div>
                    <input type="number" class="form-control" id="balance" name="balance" value="0">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="currency" class="input-group-text">Currency &nbsp;<i class="fas fa-dollar-sign"></i></label>
                    </div>
                    <select name="currency" id="currency" class="form-control">
                        <option value="AZN">AZN</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="TL">TL</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="qeyd" class="input-group-text">Qeyd&nbsp;<i class="fas fa-clipboard"></i></label>
                    </div>
                    <textarea name="qeyd" id="qeyd" rows="2" class="form-control"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-info" id="insert">GÖNDƏR <i class="far fa-paper-plane"></i></button>
                <button type="button" class="btn btn-default float-right" id="reset">SIFIRLA <i class="fas fa-ban"></i></button>
            </div>
        </div>
    </form>
</section>
</div>
<script>
$(document).ready(function(){
    
}); 
</script>