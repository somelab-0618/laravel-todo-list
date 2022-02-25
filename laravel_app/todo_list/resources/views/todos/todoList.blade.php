@section('todoList')
  <table>
    <tr>
        <th>ID</th>
        <th class="comment">コメント</th>
        <th class="status">状態</th>
    </tr>
    @foreach ($todos as $todo)
        <tr>
            <td class="id">{{ $todo->id }}</td>
            <td class="comment">{{ $todo->comment }}</td>
            <td class="button"><button class="status-button">{{ $todo->status === 'wip' ? '作業中' : '完了' }}</button></td>
            <td class="button"><button class="delete-button">削除</button></td>
        </tr>
    @endforeach
  </table>
@endsection