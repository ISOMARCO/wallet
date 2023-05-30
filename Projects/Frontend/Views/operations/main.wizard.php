<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Accounts</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('Category')}}">{{ML::select('Category')}}</a></li>
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
        <a href="{{URL::base('Category/create')}}" class="btn btn-outline-primary">Create Category <i class="fas fa-plus"></i></a> 
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
            <div class="row">
                <div class="col-md-1 col-sm-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10 col-sm-10">
                    <h3 class="card-title font-weight-bold">
                    <i class="fas fa-shopping-basket"></i>
                        Market
                    </h3>
                </div>  
                <div class="card-tools col-md-1 col-sm-1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>
    
    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/LCWaikiki.svg')}}" alt="" style="width:25px;height:25px;">
                        LC WAIKIKI
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/kfc.svg')}}" alt="" style="width:25px;height:25px;">
                        KFC
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/cocacola.svg')}}" alt="" style="width:25px;height:25px;">
                        Coca Cola
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/mcdonalds.svg')}}" alt="" style="width:25px;height:25px;">
                        MC Donalds
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/wolt.svg')}}" alt="" style="width:25px;height:25px;">
                        Wolt
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/applemusic.svg')}}" alt="" style="width:25px;height:25px;">
                        Apple Music
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/appstore.svg')}}" alt="" style="width:25px;height:25px;">
                        App Store
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/icloud.svg')}}" alt="" style="width:25px;height:25px;">
                        iCloud
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/spotify.svg')}}" alt="" style="width:25px;height:25px;">
                        Spotify
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/googleplaystore.svg')}}" alt="" style="width:25px;height:25px;">
                        Google Play Store
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/googledrive.svg')}}" alt="" style="width:25px;height:25px;">
                        Google Drive
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/azercell.svg')}}" alt="" style="width:25px;height:25px;">
                        Azercell
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/bakcell.svg')}}" alt="" style="width:25px;height:25px;">
                        Bakcell
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/narmobile.svg')}}" alt="" style="width:25px;height:25px;">
                        Nar
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/youtube.svg')}}" alt="" style="width:25px;height:25px;">
                        Youtube
                    </h3>
                </div>  
                <div class="col-md-1 card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/tiktok.svg')}}" alt="" style="width:25px;height:25px;padding:0;" class="img-responsive img-fluid">
                        Tiktok
                    </h3>
                </div>  
                <div class="card-tools col-md-1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/amazon.svg')}}" alt="" style="width:25px;height:25px;padding:0;" class="img-responsive img-fluid">
                        Amazon
                    </h3>
                </div>  
                <div class="card-tools col-md-1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/ebay.svg')}}" alt="" style="width:25px;height:25px;padding:0;" class="img-responsive img-fluid">
                        Ebay
                    </h3>
                </div>  
                <div class="card-tools col-md-1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/walmart.svg')}}" alt="" style="width:25px;height:25px;padding:0;" class="img-responsive img-fluid">
                        Walmart
                    </h3>
                </div>  
                <div class="card-tools col-md-1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/instagram.svg')}}" alt="" style="width:25px;height:25px;padding:0;" class="img-responsive img-fluid">
                        Instagram
                    </h3>
                </div>  
                <div class="card-tools col-md-1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/facebook.svg')}}" alt="" style="width:25px;height:25px;padding:0;" class="img-responsive img-fluid">
                        Facebook
                    </h3>
                </div>  
                <div class="card-tools col-md-1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            
        


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" style="float:left">Edit&nbsp;<i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">Delete&nbsp;<i class="fas fa-trash"></i></button>
        </div>
    </div>

    <div class="card collapsed-card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                </div>
                <div class="col-md-10">
                    <h3 class="card-title font-weight-bold">
                    <img src="{{URL::base(FILES_DIR.'/Categories/pubg.svg')}}" alt="" style="width:25px;height:25px;padding:0;" class="img-responsive img-fluid">
                        Pubg
                    </h3>
                </div>  
                <div class="card-tools col-md-1">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
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