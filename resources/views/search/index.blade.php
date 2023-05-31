<body background=../images/background.png>
<div style="text-align: center;">
    <img src="..\images\logo.png" alt="ぴよったー">
    <h1>UserID検索</h1>
</div>
<div style="text-align: center;">
  <form action="{{ route('search.search') }}" method="get">

    <div class="form-group",>
        <label>UserID</label>
        <input type="text" class="form-control col-md-5" placeholder="検索したいUserIDを入力してください" name="name">
    </div>
    <button type="submit" class="btn btn-primary col-md-5">検索</button>
  </div>
  </form>
</div>


    <div style=" text-align: center;">
        <h1>ユーザー一覧</h1>
        <table class="table" style="margin: auto;">
        <tr>
            <th>ユーザーID</th>
        </tr>
            @foreach($users as $user)
        <tr>
            <td>{{$user->profile_id}}</td>
        </tr>
            @endforeach
        </table>
    </div>
</body>

