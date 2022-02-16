<!DOCTYPE html>
<html lang="js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>採点システム</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
    <script src="{{ asset('js/result.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
</head>

<body class="w-100"
    style="background-image:url('https://avex.jp/upload/portal/column/img/138/image_138864d9ab305ebe7c617778ece79228787d660a.jpg'); background-repeat:no-repeat; background-size: cover;">
    <div class="score-board-wrap">
        <div class="bg-dark total-score-board mb-5" id="total_score_board">
            <p class="text-gold center total-team-name">{{ $team->name }}</p>
            <p class="text-gold center team-total-score m-0">{{ $team->total_score() }}</p>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-between">
        @foreach ($scores as $score)
            <div class="score-board m-2 bg-dark" name="score_board">
                <p class="text-gold team text-center m-0">{{ $score->score }}</p>
                <p class="text-gold  judge_name text-center m-0">{{ $score->judge->name }}</p>
            </div>
        @endforeach
    </div>
    <div class="d-flex align-items-center justify-content-center">

        <button class="btn btn-outline-warning btn-lg" id="show_result_btn">
            <span class="font-btn h2">発表</span>
        </button>
    </div>
    <form class="p-5" action="" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $team->id }}">
        <input type="hidden" name="total_score" value="{{ $team->total_score() }}">
        <button class="btn btn-outline-warning btn-block fixed-bottom">
            <span class="font-btn">順位</span>
        </button>
    </form>

</body>

</html>
