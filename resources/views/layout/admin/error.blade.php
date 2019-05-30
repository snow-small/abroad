@if($errors)
    @foreach($errors -> all() as $error)
        <p class="page-error">{{ $error }}</p>
    @endforeach
@endif
@if(url() -> current() == url('admin/login') || url() -> current() == url('admin'))
    @if(session() -> get('admin_error'))
        <p class="page-error">{{ session() -> get('admin_error') }}</p>
    @endif
@endif

@if(url()->current() == url('admin/news/create'))
    @if(session()->get('news_error'))
        <p class="page-error">{{ session()->get('news_error') }}</p>
    @endif
@endif
