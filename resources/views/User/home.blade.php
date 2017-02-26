@component('main')
    @slot('content')
        <div class="row">
            @if(count($vehicles) > 0)
                @foreach($vehicles as $v)
                <div class="col-xs-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="#" class="thumbnail">
                                <img src="{{asset($v->vehicles->image)}}">
                            </a>
                            <h4>{{strtoupper($v->vehicles->name)}}</h4>
                        </div>
                        <div class="panel-footer">
                            <a href="{{route('rent', $v)}}" class="btn btn-success">
                                Rent
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    @endslot
@endcomponent