<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body class="p-5">
    <a href="{{ route('index') }}" class="btn btn-primary">全体ページに戻る</a>
    <h1>{{ $team->name }}編集ページ</h1>
    @foreach ($scores as $score)
        <div class="card mb-3">
            <h5 class="card-header">{{ $score->judge->name }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $score->score }}点</h5>
                <p class="card-text">編集はできないから削除して再登録お願いします。</p>
                <form action="{{ route('score_destroy', ['id' => $score->id]) }}" method="post">
                    @csrf
                    <input type="hidden" name="team_id" value="{{ $score->team_id }}">
                    <button class="btn btn-danger">削除</button>
                </form>
            </div>
        </div>
    @endforeach
    @if (count($scores) == 0)
        まだスコアが設定されていません
    @endif
    <form action="" method="post">
        @csrf
        <input type="hidden" name="team_id" value="{{ $team->id }}">
        <div class="form-group">
            <label for="exampleFormControlSelect1">お名前</label>
            <select class="form-control" id="exampleFormControlSelect1" name="judge_id">
                @foreach ($judges as $judge)
                    <option value="{{ $judge->id }}">{{ $judge->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">点数(0~100)</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="score">
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">送信</button>
    </form>
</body>

</html>
