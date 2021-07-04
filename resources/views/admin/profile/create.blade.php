<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" 
content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Myprofile</title>
    </head>
    <body>
        <h1>add Action</h1>
        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
             @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <label for="male" input type="radio" class="form-control" name="gender" id="male" value="男性">男性</label><br><label for="female" input type="radio" name="gender" id="female" value="女性">女性</label><br><label for="other"><input type="radio" name="gender" id="other" value="回答しない">回答しない</label></td>>{{ old('gender') }}
                        </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control-file" name="hobby" rows="20"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control-file" name="introduction" rows="20"></textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
    </body>
</html>