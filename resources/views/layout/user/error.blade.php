@if($errors)
    @foreach($errors -> all() as $error)
        <p class="page-errno">{{ $error }}</p>
    @endforeach
@endif

@if(url() -> current() == url('register'))
    @if(session() -> get('username_error'))
        <p class="page-errno">{{ session() -> get('username_error') }}</p>
    @endif
@endif

@if(url() -> current() == url('login'))
    @if(session() -> get('code_error'))
        <p class="page-errno">{{ session() -> get('code_error') }}</p>
    @endif
    @if(session() -> get('user_error'))
        <p class="page-errno">{{ session() -> get('user_error') }}</p>
    @endif
@endif
