@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Сталась помилка</strong>
    </div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif