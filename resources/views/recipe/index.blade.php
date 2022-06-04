<h1>レシピ一覧</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">名前</th>
        <th scope="col">カロリー</th>
        <th scope="col">詳細</th>
        <th scope="col">編集</th>
        <th scope="col">削除</th>
    </tr>
    </thead>
    <tbody>

    @foreach($recipes as $recipe)
        <tr>
            <td>        {{$recipe->id}}
            </td>
            <td>        {{$recipe->name}}
            </td>
            <td>        {{$recipe->calorie}}
            </td>
            <td><a href="{{route('recipe.show',$recipe->id)}}">詳細を見る</a></td>
            <td><a href="{{route('recipe.edit',$recipe->id)}}">編集する</a></td>
            <td>
                <form method="POST" action="{{route('recipe.destroy',$recipe->id)}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit">削除する</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{route(('recipe.create'))}}">新規登録ページへ</a>
