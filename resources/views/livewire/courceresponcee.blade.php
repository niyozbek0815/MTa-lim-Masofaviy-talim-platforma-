<div class="site-container response-page">
    <div class="cource-response">
        <h4>New Response</h4>
        <form  wire:submit.prevent="addResponse({{ Auth::user()->id }})" >
            @if(session()->has("success"))
            <div class="alert alert-primary col-12" role="alert" style="display: flex; flex-direction:row; justify-content:space-between; align-items:center">
                {{ session("success") }}
            </div>
            @endif
            <div class="form-group">
                <label for="name">Lesson Name</label>
                <input type="text" id="name" required autofocus="name" wire:model="lessonName" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Kafedra nomi va gruxlar nomi va boshqalar</label>
                <textarea name="content" required id="content" cols="30" wire:model.debounce.500ms="lessonContent" class="form-control" rows="10" placeholder="Kafedra nomi va gruxlarni kiritin "></textarea>
            </div>
            <button type="submit" class="site-btn "  style="border:none; margin-top:15px">Send </button>
        </form>
    </div>
    <div class="send-response">
        <h4>My responce
           </h4>
        @foreach ($response as $data)
        <div class="alert
        @if ($data->status==0)
        alert-primary
        @else
        alert-danger
        @endif " role="alert">
            <p>{{ substr($data->name ,0,60)}}
                @if (Str::length($data->name)>60)
                    ...
                @endif</p>
            <div class="div">
                @if ($data->status==0)
                <div class="btn-sm btn btn-outline-primary">Kutilayabdi</div>
                @else
                <div type="button" class="btn-sm btn btn-outline-danger">Rad etildi</div>

                @endif
                <button class="btn-sm btn btn-outline-primary" wire:click="remove('{{ $data->id }}')"><i class="fa fa-trash-alt"></i></button>
            </div>
        </div>



        @endforeach
        {{ $response->links('pagination-links') }}
    </div>

</div>
