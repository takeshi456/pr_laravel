<h1>レシピ追加</h1>
<form action = "{{route('recipe.store')}}" method="post">
    @csrf
    <label for="recipe">レシピ名</label><input type="text" name="name" id="recipe">
    @error('name')
    <span class="text-red-400 my-3">
          {{$message}}
     </span>
    @endif

    <label for="calorie">カロリー</label><input type="number" name="calorie" id="calorie">
    @error('calorie')
    <span class="text-red-400 my-3">
          {{$message}}
     </span>
    @endif

    <input type="submit" value="追加する">
</form>
