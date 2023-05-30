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
    <form method="post" id="createForm" action="{{URL::base('operations/createRequest')}}">
        <div class="card card-info">
            <div class="card-header">Category Əlavə Et</div>
            <div class="card-body">
                <span id="msg" style="font-weight:bold"></span>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="category" class="input-group-text">Category&nbsp;<i class="fas fa-cube"></i></label>
                    </div>
                    <select name="category" id="category" class="form-control">
                        <option value="">Nothing</option>
                        @foreach($allCategoryByUser as $value)
                        <option value="{{$value->Uid}}">{{$value->Name}}</option>
                        @endforeach 
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="name" class="input-group-text">Name&nbsp;<i class="fas fa-edit"></i></label>
                    </div>
                    <input type="text" class="form-control" id="name" name="name">
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
    $("#insert").on("click",function(){
        $.ajax({
            type:"post",
            url:"{{URL::base('Category/createRequest')}}",
            data:$("#createForm").serialize(),
            dataType:"json",
            success:function(e){
                console.log(e.error);
            }
        });
    });
}); 
</script>