<option selected></option>
@foreach ($categories as $category)
    <option value="{{ $category->id }}">{{ $category->title }}</option>
@endforeach