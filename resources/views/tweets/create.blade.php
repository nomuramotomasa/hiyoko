
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">投稿画面</div>

          <div class="card-body">
            <form method="post" action="{{ url('/twees', $tweet->id) }}" enctype="multipart/form-data">
              @csrf
              {{ method_field('patch') }}

              <div class="form-group row">
                <label for="body" class="col-md-3 col-form-label text-md-right">内容</label>

                <div class="col-md-9">
                  <textarea id="" class="form-control @error('body') is-invalid @enderror" name="body" rows="3">{{ old('body', $tweets->body) }}</textarea>

                  @error('body')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

          <div>
            <a href="{{ url('/tweets', $tweets->id) }}">戻る</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
