@extends('layouts.app2')
@section('content')
    <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Talaba Qo'shish</h4>
                  <a href="{{route('admin.group.index')}}">
                    <button class="btn btn-primary">Orqaga</button>
                  </a>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                          <div class="card-body">
                            <div class="basic-form">
                              <form action="{{route('admin.lang.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">



                                  <div class="mb-3 col-md-12">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" required placeholder="Language"  name="name" id="name"/>
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
