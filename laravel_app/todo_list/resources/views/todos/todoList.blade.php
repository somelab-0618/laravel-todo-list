@section('todoList')
  <table>
    <tr>
        <th>ID</th>
        <th class="comment">コメント</th>
        <th class="status">状態</th>
    </tr>
    @foreach ($todos as $key => $todo)
        <tr>
            <td class="id">{{ $key + 1 }}</td>
            <td class="comment">{{ $todo->comment }}</td>
            <td class="button"><button class="status-button">{{ $todo->is_done ? '完了' : '作業中' }}</button></td>
            <td class="button">
              <form action="{{route('todo.destroy', $todo->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="delete-button" type="submit">削除</button>
              </form>
            </td>
        </tr>
    @endforeach
  </table>
@endsection