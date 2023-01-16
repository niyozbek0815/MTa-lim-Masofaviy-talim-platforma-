<div class="form-group">
    <div class="edit-image">
        @if ($image)
        <img class="form-img"  src="{{$image}}"  alt="" >
        @else
        <img class="form-img" src="{{ asset("/storage/user/".Auth::user()->image) }}"  alt="" >
        @endif
    </div>
    <label for="formFile" class="form-label">Image</label>
    <input class="form-control" wire:change="$emit('fileChoosen')" type="file" id="image" name="file" style="height: 38px">
  </div>
  <script>
    window.livewire.on("fileChoosen", () => {
        let inputfeild = document.getElementById("image");
        let file = inputfeild.files[0];
        let reader = new FileReader();
        reader.onloadend = () => {
            window.livewire.emit("fileUpload",reader.result);
                };
        reader['readAsDataURL'](file);
    })
</script>
