@extends('layouts.app2')
@section('content')
    <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Talaba Qo'shish</h4>
                  <a href="{{route('admin.kafedra.index')}}">
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
                              <form action="{{route('admin.kafedra.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                  <div class="mb-3 col-md-6" for="name_uz">
                                    <label  class="form-label">Name(uz)</label>
                                    <input type="text" class="form-control" placeholder=""  name="name_uz" id="name_uz" />
                                  </div>
                                  <div class="mb-3 col-md-6" for="name_ru">
                                    <label  class="form-label">Name(ru)</label>
                                    <input type="text" class="form-control" placeholder=""  name="name_ru" id="name_ru" />
                                  </div>
                                  <div class="mb-3 col-md-6" for="name_uz">
                                    <label  class="form-label">Name(en)</label>
                                    <input type="text" class="form-control" placeholder=""  name="name_en" id="name_en" />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" checked type="radio" id="chexbox" name="activ"/>
                                    <label class="form-check-label" for="chexbox"> Active </label>
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
