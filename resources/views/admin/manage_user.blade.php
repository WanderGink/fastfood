@extends('admin.index')


@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h3>User Table</h3>
        </section>
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                        </div>
                        <div class="box-body">
                            <div class="dataTables_wrapper form-inline" role="grid">
                                <table id="user" class="table table-bordered table-striped dataTable">
                                    <thead>
                                    <tr>
                                        <th aria-sort="ascending" style="width: 50px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">Id
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Full Name
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Email
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Phone
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Address
                                        </th>
                                        <th aria-sort="ascending" style="width: 60px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Delete
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $u)
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->phone }}</td>
                                            <td>{{ $u->address }}</td>
                                            <td><a href="{{ route('admin.deleteUser', $u->id) }}"><i
                                                            class="fa fa-remove" style="color:#DD380C"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    {!! $user->render() !!}
                </div>
            </div>
        </section>

    </div><!-- /.content-wrapper -->
@stop