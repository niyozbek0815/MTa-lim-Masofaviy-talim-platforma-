@extends('layouts.app2')
@section('content')
    <div class="row">

            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Gruxlar Ro'yxati</h4>
                  <a href="{{route('admin.group.index')}}">
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
                                <form action="{{route('admin.lang.update',$data['id'] )}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">

                                        <div class="mb-3 col-md-6">


                                          <div class="mb-3 col-md-6">
                                            <label class="form-label" for="name_uz">Name</label>
                                            <input type="text" class="form-control" placeholder=""  value="{{$data->name}}" name="name"/>
                                          </div>


                                      </div>

                                      <button type="submit" class="btn btn-primary">
                                        Save
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
