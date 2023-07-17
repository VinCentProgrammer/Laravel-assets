<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form Register</title>
</head>

<body>
    <div class="container">
        <h2>FORM REGISTER</h2>
        {!! Form::open(['url' => 'user/store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('username', 'Username') !!}
            {!! Form::text('username', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('city', 'Address') !!}
            {!! Form::select('city', [0 => 'Choice', 1 => 'HCM', 2 => 'HA NOI', 3 => 'DA NANG'], 0, [
                'class' => 'form-control',
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Gender') !!}
            <div class="form-check">
                {!! Form::radio('gender', 'male', '', ['class' => 'form-check-input', 'id' => 'male']) !!}
                {!! Form::label('male', 'Male', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::radio('gender', 'female', 'checked', ['class' => 'form-check-input', 'id' => 'female']) !!}
                {!! Form::label('female', 'Female', ['class' => 'form-check-label']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('skills', 'Skill') !!}
            <div class="form-check">
                {!! Form::checkbox('skills', 'html', '', ['class' => 'form-check-input', 'id' => 'html']) !!}
                {!! Form::label('html', 'HTML', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skills', 'css', '', ['class' => 'form-check-input', 'id' => 'css']) !!}
                {!! Form::label('css', 'CSS', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skills', 'php', '', ['class' => 'form-check-input', 'id' => 'php']) !!}
                {!! Form::label('php', 'PHP', ['class' => 'form-check-label']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('birth', 'Date Of Birth') !!}
            {!! Form::date('birth', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('intro', 'Introduce Yourself') !!}
            {!! Form::textarea('intro', '', ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('REGISTER', ['class' => 'btn btn-primary', 'name' => 'btn-reg']) !!}
        </div>
        {!! Form::close() !!}
    </div>

</body>

</html>
