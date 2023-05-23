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
        <a href="{{URL::base('accounts/create')}}" class="btn btn-outline-primary">Create Account <i class="fas fa-plus"></i></a> 
        <button type="button" class="btn btn-outline-secondary" id="searchButton">Search <i class="fas fa-search"></i></button>
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
    <div class="card collapsed-card">
        <div class="card-header">
        <h3 class="card-title">
        <a href="javascript:void(0)"><i class="fas fa-arrow-right"></i></a><i class="fas fa-shopping-basket"></i>
            Market
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
            
        




        <div class="card collapsed-card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-shopping-basket"></i>
                Araz Market
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
                





            <div class="card collapsed-card">
                <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-shopping-basket"></i>
                    Məmmədli Araz Market
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
                    
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
                </div>
            </div>






            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
            </div>
        </div>

        <div class="card collapsed-card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-shopping-basket"></i>
                Bravo Market
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
                
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
            </div>
        </div>







        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>


    <div class="card collapsed-card">
        <div class="card-header">
        <h3 class="card-title">
        <i class="fab fa-amazon"></i>
            Amazon
        </h3>

        <div class="card-tools">
            <i class="fas fa-shopping-basket"></i>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-plus"></i>
            </button>
            <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            
        




        <div class="card collapsed-card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-shopping-basket"></i>
                Araz Market
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
                





            <div class="card collapsed-card">
                <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-shopping-basket"></i>
                    Məmmədli Araz Market
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
                    
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
                </div>
            </div>






            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
            </div>
        </div>

        <div class="card collapsed-card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-shopping-basket"></i>
                Bravo Market
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
                
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
            </div>
        </div>







        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
        <h3 class="card-title">
        <i class="fas fa-utensils"></i>
            Kafe Restoran
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
            
        




        <div class="card collapsed-card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-shopping-basket"></i>
                Araz Market
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
                





            <div class="card collapsed-card">
                <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-shopping-basket"></i>
                    Məmmədli Araz Market
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
                    
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
                </div>
            </div>






            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
            </div>
        </div>

        <div class="card collapsed-card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-shopping-basket"></i>
                Bravo Market
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
                
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
            </div>
        </div>







        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>


</div>
</section>
</div>
<script>
$(".select2").select2();
$(document).ready(function(){
    $("#searchButton").on("click",function(){
        if($("#searchBody").attr("style")) $("#searchBody").removeAttr("style");
        else $("#searchBody").attr("style","display:none");
    });
}); 
</script>