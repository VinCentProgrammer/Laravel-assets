<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/2bo5r8tgdz1ihmhpr929n2tz6q573rozs6046jl60139u5s5/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var editor_config = {
            path_absolute: "http://localhost/BackEnd/Laravelversion2/laravelpro-unitop.vn/",
            selector: 'textarea#add-post',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback: function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>ADD POST</h2>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        {!! Form::open(['url' => 'posts/store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'TITLE']) !!}
            @error('title')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'CONTENT', 'id' => 'add-post']) !!}
            @error('content')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::file('file', ['class' => 'form-control-file']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('ADD NEW', ['class' => 'btn btn-primary', 'name' => 'btn-add-new']) !!}
        </div>
        {!! Form::close() !!}
    </div>

</body>

</html>
