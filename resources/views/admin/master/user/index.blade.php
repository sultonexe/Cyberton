@extends('template.app')

@section('title' , 'Users')
@section('pagetitle','Master User')

@section('customcss')
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}">
@endsection

@section('content')
<!-- Default box -->
    <div class="box box-primary">
        <div class="box-body">
           <div class="table">
               <table class="table table-striped table-hover table-responsive" id="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $u)
                            <tr>
                                <td>{{ $index + $users->firstItem() }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->username }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    @if ( $u->is_admin == false)
                                        <span class="label label-primary">User</span>
                                    @else 
                                        <span class="label label-success">Admin</span>
                                    @endif
                                </td> 
                            </tr> 
                        @endforeach
                    </tbody>
                </table>

                <div class="pull-right">
                    {!! $users->links() !!}
                </div>

           </div>
        </div>
        <!-- /.box-body -->
@endsection