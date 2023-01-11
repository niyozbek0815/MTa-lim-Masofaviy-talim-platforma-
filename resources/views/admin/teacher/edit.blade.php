@extends('layouts.app2')
@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yangiliklar Ro'yxati</h4>
                    <a href="{{ route('admin.teacher.index') }}">
                        <button class="btn btn-primary">Orqaga</button>
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card-body">
                            <div class="basic-form">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('admin.teacher.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Groups</label>
                                            <select id="inputState" class="default-select form-control wide" name="group">
                                                @foreach ($group as $dat)
                                                    <option value="{{ $dat->id }}"
                                                        @if ($dat->id == $data->group_id) selected @endif>
                                                        {{ $dat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Login</label>
                                            <input type="text" class="form-control" placeholder="" name="login"
                                                value="{{ $data->login }}" required/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Password"  name="password"/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Password"  name="password_confirmation" />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" activeid="" type="checkbox"
                                                @if ($data->is_active == 1) checked @endif />
                                            <label class="form-check-label" for="active"> Active </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Sign in
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>

@endsection('content')
s
