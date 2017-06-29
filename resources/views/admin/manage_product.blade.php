@extends('admin.index')

@section('content')
    <section class="content-wrapper">
        <section class="content-header">
            <h3>Product Table</h3>
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
                                            Name
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Category
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Cost
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Quantity
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Now
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Image
                                        </th>
                                        <th aria-sort="ascending" style="width: 134px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Description
                                        </th>
                                        <th aria-sort="ascending" style="width: 60px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Edit
                                        </th>
                                        <th aria-sort="ascending" style="width: 60px;" colspan="1" rowspan="1"
                                            aria-controls="user" tabindex="0" role="columnheader" class="sorting_asc">
                                            Delete
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($product as $p)
                                        <tr>
                                            <td>{{$p->Pid}}</td>
                                            <td>{{ $p->Pname }}</td>
                                            <td>{{ $p->Category }}</td>
                                            <td>{{ $p->Pcost }}</td>
                                            <td>{{ $p->Ptotal }}</td>
                                            <td>{{ $p->Pnow }}</td>
                                            <td><img src="{{ $p->Plink }}" alt="" width="40" height="40"/></td>
                                            <td>{{ $p->Des }}</td>
                                            <td><a href="{{ route('admin.edit_product', $p->Pid) }}" data-toggle="modal"><i class="fa fa-edit"
                                                                                               style="color:#05A81B"></i></a>
                                            </td>
                                            <td><a href="{{ route('admin.deleteProduct', $p->Pid) }}"><i class="fa fa-remove" style="color:#DD380C"></i></a></td>
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
                    {!! $product->render() !!}
                </div>
            </div>
        </section>
    </section>
@stop