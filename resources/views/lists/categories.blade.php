<option selected></option>

@if (!isset($post->category))    
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
    @endforeach
@else
    @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : ''}}>{{ $category->title }}</option>
    @endforeach
@endif