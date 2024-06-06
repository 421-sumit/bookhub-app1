<!-- resources/views/components/select.blade.php -->

@props(['options', 'selected' => null, 'name', 'label' => null])

<div class="form-group">
    <label class="form-label text-black" for="{{ $name }}">{{ $label }}</label>

    <select class="form-control rounded text-black" name="{{ $name }}" id="{{ $name }}">
        <option value=""> Select  </option>
        @foreach ($options as $key => $value)
            <option class="text-black" value="{{ $key }}" {{ $key == $selected ? 'selected' : '' }}>
                {{ $value }}
            </option>
        @endforeach
    </select>

    @error($name)
    <span class="text-danger">{{$message}}</span>
   <?php Log::error($message); ?>
    @enderror
</div>
