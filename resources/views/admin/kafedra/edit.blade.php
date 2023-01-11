@extends('layouts.app2')
@section('content')
    <div class="row">

            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Yangiliklar Ro'yxati</h4>
                  <a href="{{route('admin.user.index')}}">
                    <button class="btn btn-primary">Orqaga</button>
                  </a>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                          <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('admin.kafedra.update',$data_uz->id )}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                          <label class="form-label" for="name_uz">Name(uz)</label>
                                          <input type="text" class="form-control" placeholder=""  value="{{$data_uz->name}}" name="name_uz"/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="name_uz">Name(ru)</label>
                                            <input type="text" class="form-control" placeholder=""  value="{{$data_en->name}}" name="name_ru"/>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                            <label class="form-label" for="name_uz">Name(en)</label>
                                            <input type="text" class="form-control" placeholder=""  value="{{$data_ru->name}}" name="name_en"/>
                                          </div>
                                      </div>
                                      <div class="mb-3">
                                        <div class="form-check">
                                          <input class="form-check-input"
                                          @if($data_uz->is_active==1)
                                          checked
                                          @endif
                                           type="radio" id="chexbox" name="activ"/>
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
s
