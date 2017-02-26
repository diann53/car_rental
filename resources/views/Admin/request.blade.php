@component('main')
    @slot('content')
        <div class="col-xs-12 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    User Request
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Vehicle</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($requests as $r)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$r->userName->name}}</td>
                                <td>{{$r->vehicles->name}}</td>
                                <td>{{$r->created_at}}</td>
                                <td> 
                                @if($r->status == 0)
                                    <span class="label label-primary">
                                        Pending
                                        </span>
                                    @else
                                    <span class="label label-success">
                                        Approved
                                   </span>
                                    @endif
                                </td>  
                                <td>
                                @if($r->status == 0)
                                <a href="{{route('approve', $r)}}" class="btn btn-primary">Aprrove</a>
                                @else
                                <a href="{{route('reject', $r)}}" class="btn btn-danger">Reject</a>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    @endslot
@endcomponent