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
                        <label for="category" class="input-group-text">{{ML::select('Category')}}&nbsp;<i class="fas fa-cube"></i><img src="" alt="" style="display:none;width:20px;height:20px;" id="category_image"></label>
                    </div>
                    <select name="category" id="category" class="form-control">
                        <option value="">Nothing</option>
                        @foreach($allCategoryByUser as $value)
                            <option value="{{$value->Uid}}" data-image="{{$value->Picture}}">{{$value->Name}}</option>
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
                <div class="input-group mb-3" id="selected_icon" style="display:none">
                    
                    <input type="hidden" value="" name="picture">
                    <img src="" alt="" style="width:50px; height:50px; cursor: pointer;" id="unselect_icon">
                </div>
                <div class="row" id="category_icons">
                    @foreach($categoryImages as $value)
                        <div class="col-3 col-sm-2 col-md-1 mb-2" id="icon"><img src="{{URL::base(FILES_DIR.'Categories/'.$value)}}" alt="{{$value}}" style="max-width:50px;height:50px;cursor: pointer;" title="{{str_replace('_',' ',ucfirst(explode('.',$value)[0]))}}" class="img-thumbnail img-fluid1"></div>
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
    $("#icon img").on("click",function(){
        $("#category_icons").hide();
        $("#selected_icon").show();
        $("#selected_icon input").attr("value",$(this).attr("alt"));
        $("#selected_icon img").attr("src",$(this).attr("src"));
        $("#selected_icon img").attr("alt",$(this).attr("alt"));
        if($("#name").val() == "")
        {
            $("#name").val($(this).attr("title"));
        }
    });
    $("#unselect_icon").on("click",function(){
        $("#category_icons").show();
        $("#selected_icon").hide();
        $("#selected_icon input").attr("value","");
        $("#selected_icon img").attr("src","");
        $("#selected_icon img").attr("alt","");
        $("#name").val("");
    });
    $("#reset").on("click",function(){
        $("#category_icons").show();
        $("#selected_icon").hide();
        $("#selected_icon input").attr("value","");
        $("#selected_icon img").attr("src","");
        $("input").val("");
        $("#category").val($("#category option:first").val());
    });
    $("#category").on("change",function(){
        $( "#category option:selected" ).each(function(){
            if(!$(this).attr('value')) 
            {
                $(".fa-cube").show();
                $("#category_image").hide();
            }
            else 
            {
                var img = $(this).attr("data-image");
                $(".fa-cube").hide();
                $("#category_image").attr("src","{{URL::base('"+img+"');}}");
                $("#category_image").attr("alt",img);
                $("#category_image").show();
            }
            
        });
    });
}); 
</script>