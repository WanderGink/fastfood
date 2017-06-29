@extends('admin.index')


@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h3>Add a admin account</h3>
        </section>
        <section class="content">

            <form action="{{ route('admin.addAdmin') }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="username" class="control-label" style="">Username</label>
                <input type="text" id="user" name="user" class="form-control" style="width: 400px;">
            </div>
            <div>
                <label for="username" class="control-label" style="">Password</label>
                <input type="text" id="pass" name="pass" class="form-control" style="width: 400px;">
            </div>
            <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </section>

    </div><!-- /.content-wrapper -->
@stop