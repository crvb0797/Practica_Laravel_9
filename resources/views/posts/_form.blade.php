@csrf

<label class="uppercase text-gray-700 text-sm">Titulo</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{old('title', $post->title)}}">
<span class="text-sm text-red-500">@error('title') {{$message}} @enderror</span>

<br>
<br>

<label class="uppercase text-gray-700 text-sm">Cuerpo de la publicación</label>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4">{{old('body',$post->body)}}</textarea>
<span class="text-sm text-red-500">@error('body') {{$message}} @enderror</span>

<br>

<div class="flex items-center justify-between">
    <a href="{{route('posts.index')}}" class="text-indigo-600">Regresar</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
