@if(Session::id()):
    @view('Sections/header')
@endif  
@view
@if(Session::id()):
    @view('Sections/footer')
@endif