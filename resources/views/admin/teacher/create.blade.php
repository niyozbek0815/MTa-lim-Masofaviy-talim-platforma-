@extends('layouts.app2')
@section('content')
    <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Talaba Qo'shish</h4>
                  <a href="{{route('admin.teacher.index')}}">
                    <button class="btn btn-primary">Orqaga</button>
                  </a>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                          <div class="card-body">
                            <div class="basic-form">
                              <form action="{{ route('admin.teacher.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="group">Kafedra</label>
                                        <select required id="inputState" class="default-select form-control wide" id="group" name="kafedra_id">
                                          <option selected>Choose...</option>
                                       @foreach ($group as $g )
                                       <option value="{{$g->id}}">{{$g->name}}</option>
                                       @endforeach
                                        </select>
                                        @error('group_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                      </div>
                                  <div class="mb-3 col-md-6">
                                    <input required type="hidden" value="1" class="form-control" placeholder=""  name="roll_id"/>

                                    <label class="form-label">Login</label>
                                    <input required type="text" class="form-control" placeholder=""  name="login"/>
                                    @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>
                                  <div class="mb-3 col-md-6">
                                    <label class="form-label" for="pass">Password</label>
                                    <input required type="password" class="form-control" placeholder="Password"  name="password" id="pass"/>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>
                                  <div class="mb-3 col-md-6">
                                    <label class="form-label" for="password-confirm">Password</label>
                                    <input required id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                </div>

                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" checked type="checkbox" />
                                    <label class="form-check-label"> Active </label>
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
