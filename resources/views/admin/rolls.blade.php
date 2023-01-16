@extends('layouts.app2')
@section('content')
    <div class="row">

        <div class="col-12">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display table  table-hover table-responsive-sm"
                            style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rolls as $data)
                                    <tr>
                                        <td><strong>{{($loop->index+1)}}</strong></td>
                                        <td>{{ $data->name }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                 </tr>
                            </tfoot>



                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection('content')
