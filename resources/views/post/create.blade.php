<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>FS.COM测试站</title>
    <link href="" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="">
    <div id="">
        <form name="" action="{{ url('post') }}" method = "POST">
            {{ csrf_field() }}
            <fieldset>
                <p>
                    <label style="margin-left: -28px; font-size: 15px; ">用户名: </label>
                    <br />
                    <input type="text" id="" name="title" value="{{ old('title') }}" size="20"/>
                </p>
                <div class="clearBoth" ></div>
                <p>
                    <label style="margin-left: -28px; font-size: 15px;">密码: </label>
                    <br />
                    <input type="password" id="" name="body" value="{{ old('body') }}" size="20" />
                    <br class="clearBoth" /><br class="clearBoth" />
                </p>
                <p class="submit">
                    <input type="submit" name="" id="submit" value="" />
                </p>
            </fieldset>
        </form>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
</body>
</html>
