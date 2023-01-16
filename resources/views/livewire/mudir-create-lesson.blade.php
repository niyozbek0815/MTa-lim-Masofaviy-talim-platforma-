<div>


</div>
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
                            <img src="{{asset("storage/user/user-logo.png") }}" alt=" "> {{ $data->teacher->login }}
                        </a>
                    </div>
                    <div> <button type="button" class="btn btn-danger" wire:click="remove({{ $data->id }})">Rad etish</button>
                        <button type="button" class="btn btn-info" wire:click="show({{ $data->id }})">Ko'rib chiqish</button></div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $response->links('pagination-links') }}

    </div>

</div>
<div class="site-container response-page">
    <div class="cource-response">
        <h4>New Response </h4>
        <form action="#">
            <div class="form-group">
                <label for="name">Lesson Name</label>
                <input type="text" id="name" autofocus="name" name="name" class="form-control"
               value="">
            </div>
            <div class="form-group">
                <label for="content">Kafedra nomi va gruxlar nomi va boshqalar</label>
                <textarea name="content" id="content" cols="30" class="form-control" rows="10" placeholder="Kafedra nomi va gruxlarni kiritin "></textarea>
            </div>
        </form>
    </div>
    <div class="send-response">

        <h4> @if ( $showResponse!==null) {{ $showResponse->name }} @endif</h4>
        <p class="card-text">@if ( $showResponse!==null){{ $showResponse->content }} @endif</p>

    </div>

</div>
