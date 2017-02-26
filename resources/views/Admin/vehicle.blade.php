@component('main')
    @slot('content')
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline" method="post" action="{{route('addVehicle')}}" enctype="multipart/form-data"
>
                    <div class="form-group">
                        <label for="exampleInputName2">Vehicle</label>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input name="name" type="text" class="form-control" id="exampleInputName2" placeholder="Perodua Viva">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Image</label>
                        <input name="image" type="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            @foreach($vehicles as $v) <div class="col-xs-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#" class="thumbnail">
                            <img src="{{asset($v->vehicles->image)}}">
                        </a>
                        <h4>{{strtoupper($v->vehicles->name)}}</h4>


                    </div>
                    <div class="panel-footer">
                        <a href="{{route('deleteVehicle', $v)}}" class="btn btn-danger">
                            Delete
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endslot
@endcomponent

