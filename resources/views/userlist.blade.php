@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Users List</h4>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No:</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Occupation</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    @foreach($userlist as $users)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{ucfirst($users->name)}}</td>
                        <td>{{ucfirst($users->email)}}</td>
                        <td>{{$users->age}}</td>
                        <td>{{ucfirst($users->occupation)}}</td>
                    </tr>
                    <?php $i++;?>
                    @endforeach
                    
                </tbody>
               
            </table>
        </div>

    </div>
</div>

@endsection
