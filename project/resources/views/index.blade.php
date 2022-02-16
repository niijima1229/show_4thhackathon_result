<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/result.js') }}" defer></script>
    <title>Document</title>
</head>

<body class="p-5">
    @foreach ($teams as $team)
        <div class="card mb-3">
            <h5 class="card-header">{{ $team->name }}</h5>
            <div class="card-body">
                <p class="card-text">
                    @if ($team->is_announced)
                        発表済み
                    @else
                        未発表
                    @endif
                </p>
                <a href="{{ route('show_result', $team->id) }}" class="btn btn-primary">発表ページへ</a>
                <a href="{{ route('score_create', $team->id) }}" class="btn btn-primary">得点登録ページへ</a>
            </div>
        </div>
    @endforeach
    <a href="{{ route('show_rank') }}" class="fixed-bottom btn btn-warning btn-block">
        <span class="font-btn">順位表ページ</span>
    </a>
</body>

</html>
