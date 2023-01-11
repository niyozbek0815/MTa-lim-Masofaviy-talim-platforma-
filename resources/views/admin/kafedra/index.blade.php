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
                <div class="card-header">
                    <h4 class="card-title">Kafedralar jadvali</h4>
                    <a href="{{ route('admin.kafedra.create') }}">
                        <button class="btn btn-primary">Qo'shish</button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display table  table-hover table-responsive-sm"
                            style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th><i class="bi bi-gear" style="padding: 5px 8px"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td><strong>{{($loop->index+1)}}</strong></td>
                                        <td>{{ $data->name }}</td>

                                        <td>
                                            <form action="{{ asset('/admin/kafedra/isactive/' . $data->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="sweetalert">
                                                    <button type="button"
                                                        class="
                                        @if ($data->is_active == 1) btn-success @endif
                                         @if ($data->is_active == 0) btn-danger @endif
                                        btn sweet-confirm">
                                                        @if ($data->is_active == 1)
                                                            Active
                                                        @endif
                                                        @if ($data->is_active == 0)
                                                            Not Active
                                                        @endif
                                                    </button>
                                                </div>
                                            </form>

                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp"
                                                    data-bs-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <circle fill="#000000" cx="5" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="19" cy="12"
                                                                r="2" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">

                                                    <a class="dropdown-item "
                                                        href="{{ route('admin.kafedra.edit', $data->id) }}" type="button"
                                                        class="btn btn-success">
                                                        <p>Edit</p>
                                                    </a>
                                                    <form class="dropdown-item "
                                                        action="{{ route('admin.kafedra.destroy', $data->id) }}"
                                                        method="POST" style="color: #fff">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="sweetalert">
                                                            <label for="delete">Delete</label>
                                                        <input type="submit" class="text-denger sweet-confirm"
                                                            value="Delete" id="delete" style="display: none">
                                                        </div>

                                                    </form>


                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>

                                    <th><i class="bi bi-gear" style="padding: 5px 8px"></i></th>
                                </tr>
                            </tfoot>



                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection('content')
