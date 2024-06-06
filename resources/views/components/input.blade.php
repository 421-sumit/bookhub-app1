<div class="form-group">
    <label class="form-label text-black">{{$lable}}</label>
    <input class="form-control rounded text-black" type="{{$type}}" name="{{$name}}" value="{{$value}}">
    @error($name)
    <span class="text-danger">{{$message}}</span>
   <?php Log::error($message); ?>
    @enderror
</div>