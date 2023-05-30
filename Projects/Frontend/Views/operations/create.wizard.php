<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>{{ML::select('CreateOperations')}}</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('operations')}}">{{ML::select('Operations')}}</a></li>
            <li class="breadcrumb-item active">{{ML::select('CreateOperations')}}</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <form method="post" id="createForm" action="{{URL::base('operations/createRequest')}}">
        <div class="card card-info">
            <div class="card-header">{{ML::select('CreateOperations')}}</div>
            <div class="card-body">
                <span id="msg" style="font-weight:bold"></span>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="category" class="input-group-text">{{ML::select('Category')}}&nbsp;<i class="fas fa-cube"></i></label>
                    </div>
                    <select name="category" id="category" class="form-control">
                        @foreach($allCategoryByUser as $value)
                        <option value="{{$value->Uid}}">{{$value->Name}}</option>
                        @endforeach 
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="amount" class="input-group-text">{{ML::select('Amount')}}&nbsp;<i class="far fa-money-bill-alt"></i></label>
                    </div>
                    <input type="number" class="form-control" id="amount" name="amount">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="date" class="input-group-text">{{ML::select('Date')}}&nbsp;<i class="far fa-calendar-alt"></i></label>
                    </div>
                    <input type="date" class="form-control" id="date" name="date" placeholder="dd-mm-yyyy">
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