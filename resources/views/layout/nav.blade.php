@section('nav')
<ul class="js-clone-nav">
  <li class="active"><a href="{{ route('Home.show') }}">ホーム</a></li>
  <li><a href="{{ route('Home.show') }}">重ね着写真集</a></li>
  <li><a href="{{ route('Blog.show') }}">運営者のブログ</a></li>
  <li><a href="{{ route('Contact.show') }}">お問い合わせ</a></li>
</ul>
@endsection