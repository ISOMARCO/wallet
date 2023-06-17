<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>{{ML::select('LoggedDevices')}}</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{URL::base('Settings')}}">{{ML::select('Settings')}}</a></li>
            <li class="breadcrumb-item active">{{ML::select('LoggedDevices')}}</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
<div class="card">
<div class="card-header">

</div>
<div class="card-body">
    @foreach($loggedDevices as $value)
        <div class="card collapsed-card">
            <div class="card-header">
                <div class="row">
                    <div class="col-1 col-sm-1">
                        <a href="javascript:void(0)"><i class="fas fa-arrow-circle-right fa-lg"></i></a>
                    </div>
                    <div class="col-10 col-sm-10">
                        <h3 class="card-title font-weight-bold">
                            {{ucfirst(BrowserDetection::getDevice($value->User_Agent)['device_type']." ".BrowserDetection::getOS($value->User_Agent)['os_title']." ".BrowserDetection::getBrowser($value->User_Agent)['browser_name'])}}
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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Device Name</th>
                            <td>{{ucfirst(BrowserDetection::getDevice($value->User_Agent)['device_type'])}}</td>
                        </tr>
                        <tr>
                            <th>Operating System</th>
                            <td>{{ucfirst(BrowserDetection::getOS($value->User_Agent)['os_title'])}}</td>
                        </tr>
                        <tr>
                            <th>Browser Name</th>
                            <td>{{ucfirst(BrowserDetection::getBrowser($value->User_Agent)['browser_name'])}}</td>
                        </tr> 
                        <tr>   
                            <th>Ip Address</th>
                            <td>{{$value->Ip_Address}}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>{{json_decode($value->Location)->country}}</td>
                        </tr>
                        <tr>
                            <th>Coordinate</th>
                            <td>{{json_decode($value->Location)->lat.', '.json_decode($value->Location)->lon}}</td>
                        </tr>
                        <tr>
                            <th>Organization</th>
                            <td>{{json_decode($value->Location)->org}}</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>{{$value->Location}}</td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-danger" style="float:right" onclick="return confirm('Are you sure?')">{{ML::select('Exit')}}&nbsp;<i class="fas fa-sign-out-alt"></i></button>
            </div>
        </div>
    @endforeach
</div>
</section>
</div>
<script>
$(document).ready(function(){
    
}); 
</script>