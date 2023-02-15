<div>
    <div class="site-container response-page1">
        <div class="send-response send-response1">
            <h4>My responce</h4>
            @foreach ($response as $data)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->name }}</h5>
                        <p class="card-text">{{ Str::substr($data->content, 0, 120) }}</p>
                        <div class="cource-teacher ">
                            <div class="teacher-profil ">
                                <a href="# ">
                                    <img src="{{ asset('storage/user/user-logo.png') }}" alt=" ">
                                    {{ $data->teacher->login }}
                                </a>
                            </div>
                            <div> <button type="button" class="btn btn-danger"
                                    wire:click="remove({{ $data->id }})">Rad etish</button>
                                <button type="button" class="btn btn-info"
                                    wire:click="$emit('showResponse','{{$data->id}}')">Ko'rib chiqish</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $response->links('pagination-links') }}


        </div>

    </div>
    <div class="site-container response-page">
        <div class="cource-response">
            <h4>Create Cource </h4>
            <form action="#">
                <div class="form-group">
                    <label for="name">Lesson Name</label>
                    <input type="text" id="name" autofocus="name" name="name" class="form-control"
                        value="@if ($showResponse !== null) {{ $showResponse->name }} @endif">
                </div>
                <div class="row">

                    <div class="col-12">
                        <label>
                            Dars tipini tanlang <br /> </label>

                        <select class="form-control" wire:model="tip" style="height: 38px">
                            <option selected>Choose...</option>
                            @foreach ($cource_tip as $data)
                                <option value="{{ $data['id'] }}">{{ $data['name'] }}</option>
                            @endforeach
                        </select>

                    </div>


                    <div class="col-12">

                        <label>
                            Kafedrani tanlang <br /> </label>

                        <select class="form-control" style="height: 38px">
                            <option selected>Choose...</option>

                            @foreach ($kafedraa as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach



                        </select>

                    </div>
                    <div class="col-12">
                        <label class="select2-label" for="id_label_multiple">
                            O'qtuvchilarni tanlang <br /> </label>

                        <select class="select2-with-label-multiple  js-states form-control"  name="sdjsxwdkcj" id="id_label_multiple"
                            multiple="multiple">

                            @foreach ($teachers as $data)
                                <option value="{{ $data->id}}">{{ $data->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-12">
                        <label class="select2-label" for="id_label_multiple1">
                            Gruhlarni qo'shish <br /> </label>

                        <select class="select2-with-label-multiple  js-states form-control" id="id_label_multiple1"
                            multiple="multiple">
                            @foreach (Illuminate\Support\Facades\DB::table('kafedra_'.app()->getLocale('lang').'s')->get() as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach

                        </select>


                </div>
            </form>
        </div>


    </div>
    <div class="cource-response">
        <h4>Create Cource </h4>
        <form action="#">
            <div class="form-group">
                <label for="name">Lesson Name</label>
                <input type="text" id="name" autofocus="name" name="name" class="form-control"
                    value="@if ($showResponse !== null) {{ $showResponse->name }} @endif">
            </div>
            <div class="row">

                <div class="col-12">
                    <label>
                        Dars tipini tanlang <br /> </label>

                    <select class="form-control" wire:model="tip" style="height: 38px">
                        <option selected>Choose...</option>
                        @foreach ($cource_tip as $data)
                            <option value="{{ $data['id'] }}">{{ $data['name'] }}</option>
                        @endforeach
                    </select>

                </div>


                <div class="col-12">

                    <label>
                        Kafedrani tanlang <br /> </label>

                    <select class="form-control" style="height: 38px">
                        <option selected>Choose...</option>

                        @foreach ($kafedraa as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach



                    </select>

                </div>
                <div class="col-12">
                    <label class="select2-label" for="id_label_multiple">
                        O'qtuvchilarni tanlang <br /> </label>

                    <select class="select2-with-label-multiple  js-states form-control"  name="sdjsxwdkcj" id="id_label_multiple"
                        multiple="multiple">

                        @foreach ($teachers as $data)
                            <option value="{{ $data->id}}">{{ $data->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-12">
                    <label class="select2-label" for="id_label_multiple1">
                        Gruhlarni qo'shish <br /> </label>

                    <select class="select2-with-label-multiple  js-states form-control" id="id_label_multiple1"
                        multiple="multiple">
                        @foreach (Illuminate\Support\Facades\DB::table('kafedra_'.app()->getLocale('lang').'s')->get() as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach

                    </select>


            </div>
        </form>
    </div>


</div>
