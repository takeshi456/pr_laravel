<h1>レシピ編集</h1>
<form action = "{{route('recipe.update',$recipe->id)}}" method="post">
    @method('PUT')
    @csrf
    <label for="recipe">レシピ名</label><input type="text" name="name" id="recipe" value="{{$recipe->name}}">
    <label for="calorie">カロリー</label><input type="number" name="calorie" id="calorie" value="{{$recipe->calorie}}">
    <input type="submit" value="更新する">
</form>
