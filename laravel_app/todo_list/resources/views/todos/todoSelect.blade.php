@section('todoSelect')
<div>
    <form action="{{route('todo.index')}}" method="GET">
        <div class="radio-wrap">
            <div class="radio-item">
                <label>
                    <input type="radio" name="selected" class="form-check-input" value="null" onChange="submit(this.form)"{{ $selected === 'all' ? 'checked' : '' }} checked>
                    すべて
                </label>
            </div>
            <div class="radio-item">
                <label class="radio-item">
                    <input type="radio" name="selected" class="form-check-input" value="0" onChange="submit(this.form)"{{ $selected === '0' ? 'checked' : '' }}>
                    作業中
                </label>
            </div>
            <div class="radio-item">
                <label class="radio-item">
                    <input type="radio" name="selected" class="form-check-input" value="1" onChange="submit(this.form)"{{ $selected === '1' ? 'checked' : '' }}>
                    完了
                </label>
            </div>
        </div>
    </form>
</div>
@endsection
