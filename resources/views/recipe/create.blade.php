<h1>レシピ追加</h1>
<form action = "{{route('recipe.store')}}" method="post">
    @csrf
    <label for="recipe">レシピ名</label><input type="text" name="name" id="recipe">
    <label for="calorie">カロリー</label><input type="number" name="calorie" id="calorie">
    <input type="submit" value="追加する">
</form>
