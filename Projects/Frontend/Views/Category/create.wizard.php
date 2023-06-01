<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>{{ML::select('CreateCategory')}}</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('Category')}}">{{ML::select('Category')}}</a></li>
            <li class="breadcrumb-item active">{{ML::select('CreateCategory')}}</li>
        </ol>
        </div>
    </div>
    </div>
</section>
<section class="content">
    <form method="post" id="createForm" action="{{URL::base('Category/createRequest')}}">
        <div class="card card-info">
            <div class="card-header">{{ML::select('CreateCategory')}}</div>
            <div class="card-body">
                <span id="msg" style="font-weight:bold"></span>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="category" class="input-group-text">{{ML::select('Category')}}&nbsp;<i class="fas fa-cube"></i></label>
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
                        <label for="type" class="input-group-text">{{ML::select('Type')}}&nbsp;<i class="fas fa-comment-dollar"></i></label>
                    </div>
                    <select name="type" id="type" class="form-control">
                        <option value="POSITIVE">Gəlir</option> 
                        <option value="NEGATIVE">Xərc</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="name" class="input-group-text">{{ML::select('Name')}}&nbsp;<i class="fas fa-edit"></i></label>
                    </div>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="row">
                    @foreach($categoryImages as $value)
                        <div class="col-md-1"><img src="{{URL::base(FILES_DIR.'Categories/'.$value)}}" alt="" style="width:25px;height:25px;"></div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-info" id="insert">{{ML::select('Submit')}} <i class="far fa-paper-plane"></i></button>
                <button type="button" class="btn btn-default float-right" id="reset">{{ML::select('Reset')}} <i class="fas fa-ban"></i></button>
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