@extends('admin.index')


@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h3>Admin Table</h3>
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
                                            Username
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Người tạo
                                        </th>
                                        <th aria-sort="ascending" style="width: 60px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Delete
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($admin as $a)
                                        <tr>
                                            <td>{{ $a->Aid }}</td>
                                            <td>{{ $a->username }}</td>
                                            <td>{{ $a->nguoitao }}</td>
                                            @if(Session::get('admin')=='tuanbaros')
                                            <td><a href="{{ route('admin.deleteAdmin', $a->Aid) }}"><i
                                                            class="fa fa-remove" style="color:#DD380C"></i></a></td>
                                            @endif
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
                    {!! $admin->render() !!}
                </div>
            </div>
        </section>

    </div><!-- /.content-wrapper -->
@stop