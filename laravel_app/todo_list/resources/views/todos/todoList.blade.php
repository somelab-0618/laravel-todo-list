@section('todoList')
  <table>
    <tr>
        <th>ID</th>
        <th class="comment">コメント</th>
        <th class="status">状態</th>
    </tr>
    {{ $_SERVER['QUERY_STRING'] }}
    @foreach ($todos as $key => $todo)
        <tr>
            <td class="id">{{ $key + 1 }}</td>
            <td class="comment">{{ $todo->comment }}</td>
            <td class="button">
              <form action="{{route('todo.update', $todo->id)}}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="selected" value="{{ $_SERVER['QUERY_STRING'] }}">
                <button class="status-button" type="submit">{{ $todo->is_done ? '完了' : '作業中' }}</button>
              </form></td>
            <td class="button">
              <form action="{{route('todo.destroy', $todo->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="selected" value="{{ $_SERVER['QUERY_STRING'] }}">
                <button class="delete-button" type="submit">削除</button>
              </form>
            </td>
        </tr>
    @endforeach
  </table>
@endsection