@section('todoForm')
    <div>
        <h2>新規タスク追加</h2>
        @if ($errors->first('comment'))
            <p class="error">※{{$errors->first('comment')}}</p>
        @endif
        <form action="{{route('todo.store')}}" method="POST">
            @csrf
            <input type="text" name="comment" class="todo-input">
            <button class="add-button" type="submit">追加</button>
        </form>
    </div>
@endsection
