<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <!-- <h1>Accounts</h1> -->
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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="col-md-10">Name</th>
                <th class="col-md-1">Action</th>
            </tr>    
        </thead>
        <tbody>
            <tr>
                <th>Market</th>
                <th><button type="button" class="btn btn-primary">Edit</button></th>
            </tr>
        </tbody>
    </table>

</section>
</div>