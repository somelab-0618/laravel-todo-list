@section('todoSelect')
<div>
    <form action="{{route('todo.index')}}" method="GET">
        <label>
            <input type="radio" name="selected" class="form-check-input" value="null" onChange="submit(this.form)"{{ $selected === 'all' ? 'checked' : '' }} checked>
            すべて
        </label>
        <label>
            <input type="radio" name="selected" class="form-check-input" value="0" onChange="submit(this.form)"{{ $selected === '0' ? 'checked' : '' }}>
            作業中
        </label>
        <label>
            <input type="radio" name="selected" class="form-check-input" value="1" onChange="submit(this.form)"{{ $selected === '1' ? 'checked' : '' }}>
            完了
        </label>
    </form>
</div>
@endsection
