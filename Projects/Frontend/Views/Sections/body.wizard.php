@if(Session::Uid()):
    @view('Sections/header')
@endif  
@view
@if(Session::Uid()):
    @view('Sections/footer')
@endif