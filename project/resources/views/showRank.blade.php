<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
    <script src="{{ asset('js/index.js') }}" defer></script>

    <title>Document</title>
</head>

<body
    style="background-image:url('https://avex.jp/upload/portal/column/img/138/image_138864d9ab305ebe7c617778ece79228787d660a.jpg'); background-repeat:no-repeat; background-size: cover;">
    <div class="px-5 py-2" style="height:100%;">
        <h2 class="m-0"><span class="rank_title">RANKING</span></h2>
        <div class="outer" id="target">
            <div class="inner d-flex flex-column justify-content-between flex-wrap">
                @foreach ($teams as $team)
                    @if ($loop->index < 2)
                        <div style="height:40%; width: 55%;" class="mb-5 mr-5">
                            <div class="d-flex bg-dark can_final_card justify-content-between">
                                <p class="d-flex align-items-center h1 p-3 mb-0 bg-gold text-danger top_rank_text">
                                    {{ $loop->iteration }}</p>
                                <p class="h1 p-3 mb-0 text-gold d-flex align-items-center" style="font-size: 3rem;">
                                    {{ $team->name }}</p>
                                <p class="d-flex align-items-center h1 p-3 mb-0 bg-gold text-danger top_rank_text">
                                    {{ $team->total_score }}
                                </p>
                            </div>
                        </div>
                    @else
                        <div style="width: 40%;" class="mb-5">
                            <div class="d-flex bg-dark lose-card justify-content-between">
                                <p class="px-1 d-flex align-items-center mb-0 h1  lose-rank lose_rank_text">
                                    {{ $loop->iteration }}</p>
                                <p class="d-flex align-items-center mb-0 h1 text-gold">{{ $team->name }}</p>
                                <p class="px-1 d-flex align-items-center mb-0 h1  lose-rank lose_rank_text">
                                    {{ $team->total_score }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <a href="{{ route('index') }}" class="fixed-bottom btn btn-outline-warning btn-block">
            <span class="font-btn">全チームページ</span>
        </a>
    </div>
</body>

</html>
