<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
<div class="row col-sm-12 col-md-4">
    <div class="mypage">
    <div class="top">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$user->name}}</h5>
            <p class="card-text">{{$user->profile}}</p>
        </div>

        </div>
    </div>
    <div class="column">
        <div class="mypage-bottom">
        <div class="card">
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a href="{{ route('other.follow', $user->id) }}">{{$follow}} following</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('other.follower', $user->id) }}">{{$follower}} follower</a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<br />
