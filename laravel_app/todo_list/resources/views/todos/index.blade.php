<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TodoList</title>
        <style>
            main {
                width: 50%;
                margin: 0 auto;
            }

            button {
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <main>
            <h1>Todo List</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>コメント</th>
                    <th>状態</th>
                </tr>
                @foreach ($todos as $todo)
                    <tr>
                        <td>{{ $todo->id }}</td>
                        <td>{{ $todo->comment }}</td>
                        <td><button>{{ $todo->status === 'wip' ? '作業中' : '完了' }}</button></td>
                        <td><button>削除</button></td>
                    </tr>
                @endforeach
            </table>

        </main>
    </body>
</html>
