<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Accounts</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('translation')}}">{{ML::select('Translation')}}</a></li>
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
        <a href="javascript:void(0)" class="btn btn-outline-primary" id="create">Create Translation <i class="fas fa-plus"></i></a> 
    </span>
</div>
<div class="card-body" id="createArea">
    <form method="post" id="wordsForm">
    @foreach($words[$languages[0]->Code] as $key => $value)
        <div class="card collapsed-card">
            <div class="card-header">
                <div class="row">
                    <div class="col-1 col-sm-1">
                        <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                    </div>
                    <div class="col-10 col-sm-10">
                        <h3 class="card-title font-weight-bold">
                            {{$key}}
                        </h3>
                    </div>  
                    <div class="card-tools col-1 col-sm-1">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body" id="{{$key}}">
                @foreach($languages as $lang)
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label for="{{$lang->Code}}" class="input-group-text">{{$lang->Name}}</label>
                        </div>
                        <input type="text" class="form-control" id="{{$lang->Code}}" name="{{$lang->Code}}" value="{{isset($words[$lang->Code][$key]) ? $words[$lang->Code][$key] : ''}}">
                    </div>
                @endforeach
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" id="editButton" style="float:left" data-selector="{{$key}}">Edit&nbsp;<i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" id="deleteButton" style="float:right">Delete&nbsp;<i class="fas fa-trash"></i></button>
            </div>
        </div>
    @endforeach
    </form>
</div>
</section>
</div>
<script>
$(document).ready(function(){
    $("#create").on("click",function(){
        $("#createArea").prepend(`
        <form method="post" id="insertLanguageForm">
        <div class="card collapsed-card">
            <div class="card-header">
                <div class="row">
                    <div class="col-1 col-sm-1">
                        <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                    </div>
                    <div class="col-10 col-sm-10">
                        <h3 class="card-title font-weight-bold">
                            <input type="text" name="key" class="form-control">
                        </h3>
                    </div>  
                    <div class="card-tools col-1 col-sm-1">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @foreach($languages as $lang)
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label for="{{$lang->Code}}" class="input-group-text">{{$lang->Name}}</label>
                        </div>
                        <input type="text" class="form-control" id="{{$lang->Code}}" name="{{$lang->Code}}">
                    </div>
                @endforeach
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" style="float:left" id="saveButton">Save&nbsp;<i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" style="float:right" id="cancelButton">Cancel&nbsp;<i class="fas fa-ban"></i></button>
            </div>
        </div>
        </form>
        `);
    });
    $(document).on('click', '#cancelButton', function() {
        $("#insertLanguageForm").remove();
    });
    $(document).on('click', '#saveButton', function() {
        $.ajax({
            type: "post",
            url: "{{URL::base('translation/createRequest')}}",
            data: $("#insertLanguageForm").serialize(),
            dataType: "json",
            success:function(e){
                if(e.success)
                {
                    window.location.href="{{URL::base('translation')}}";
                }
            }
        });
    });
    $(document).on("click", "#deleteButton", function(){
        if(confirm("Are you sure ?"))
        {
            $.ajax({
                type: "post",
                url: "{{URL::base('translation/deleteRequest')}}",
                data: $("#wordsForm").serialize(),
                dataType: "json",
                success:function(e){
                    if(e.success)
                    {
                        window.location.href="{{URL::base('translation')}}";
                    }
                }
            });
        }
    });
    $(document).on("click", "#editButton", function(){
        var dataSelector = $(this).attr("data-selector");
        $.ajax({
            type: "post",
            url: "{{URL::base('translation/updateRequest')}}",
            data: $("#wordsForm").serialize() + "&key = "+dataSelector,
            dataType: "json",
            success:function(e){
                if(e.success)
                {
                    alert(e.success);
                    //window.location.href="{{URL::base('translation')}}";
                }
            }
        });
    });
}); 

</script>