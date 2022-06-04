<h1>レシピ詳細</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">名前</th>
        <th scope="col">カロリー</th>
        <th scope="col">作成日</th>
        <th scope="col">更新日</th>

    </tr>
    </thead>
    <tbody>

    <tr>
        <td>        {{$recipe->id}}
        </td>
        <td>        {{$recipe->name}}
        </td>
        <td>        {{$recipe->calorie}}
        </td>
        <td>       {{$recipe->created_at}}
        </td>
        <td>        {{$recipe->updated_at}}

        </td>
        <td><a href="{{route('recipe.index')}}">一覧ページに戻る</a></td>
    </tr>
    </tbody>
</table>


