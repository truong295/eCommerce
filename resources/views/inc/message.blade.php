@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="card-body">                             
            <div class="alert alert-success" role="alert" style="text-align: center">
                {{$error}}
            </div>
        </div>
    @endforeach    
@endif

@if (session('status'))
        <div class="card-body">                             
            <div class="alert alert-success" role="alert" style="text-align: center">
                {{session('status')}}
            </div>
        </div> 
@endif

