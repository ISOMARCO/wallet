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
                    <label for="name" class="input-group-text">Bank&nbsp;&nbsp;<img src="" style="width:20px;height:20px;" id="bankNameImg"></label>
                </div>
                <select name="name" id="name" class="form-control">
                    @foreach($banks as $value)
                        <option value="{{$value->Code}}" data-image="{{$value->Picture}}">{{$value->Name}}</option>
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
            <div class="input-group mb-3" id="credit_amount_div" style="display:none">
                <div class="input-group-prepend">
                    <label for="credit_amount" class="input-group-text">Credit Amount<i class="fas fa-hand-holding-usd"></i></label>
                </div>
                <input type="number" class="form-control" id="credit_amount" name="credit_amount" value="500">
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
    var img = $("#name option").attr("data-image");
    $("#bankNameImg").attr("src","{{URL::base('"+img+"');}}");
    $("#select2").select2();
    $("#name").on("change",function(){
        $( "#name option:selected" ).each(function(){
            var img = $(this).attr("data-image");
            $("#bankNameImg").attr("src","{{URL::base('"+img+"');}}");
        });
    });
    $("#type").on("change",function(){
        $( "#type option:selected" ).each(function(){
            if($(this).attr("value") == "CREDIT") {
                $("#credit_amount_div").removeAttr("style");
            } else {
                $("#credit_amount_div").attr("style","display:none");
            }
        });
    });
}); 
</script>