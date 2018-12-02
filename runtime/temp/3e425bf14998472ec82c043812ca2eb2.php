<?php /*a:1:{s:85:"E:\phpstudy\PHPTutorial\WWW\day-day-up\application\index\view\studentlogin\index.html";i:1543580435;}*/ ?>
<html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>登录</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/vendor/layui/dist/css/layui.css" media="all">
</head>

<body>
   
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
        <legend><?php echo htmlentities($testName); ?></legend>
    </fieldset>
    <div class="layui-anim layui-anim-up login-main" id="form-main" style="padding-right:10px;">
        <form class="layui-form" action="" method="POST" lay-filter="example">
            <div class="layui-form-item">
                <label class="layui-form-label" style="width:60px;">账号</label>
                <div class="layui-input-block"  style="margin-left:90px;">
                    <input type="text" name="sno" lay-verify="sno" autocomplete="off" placeholder="请输入学号"
                        class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                    <label class="layui-form-label"  style="width:60px;">姓名</label>
                    <div class="layui-input-block" style="margin-left:90px;">
                        <input type="text" name="name" lay-verify="username" autocomplete="off" placeholder="请输入姓名"
                            class="layui-input">
                    </div>
                </div>

            <div class="layui-form-item">
                <div class="layui-input-block"  style="margin-left:90px;">
                    <button class="layui-btn" lay-submit="" lay-filter="demo1">登录</button>
                </div>
            </div>
        </form>
    </div>
    <script src="/vendor/layui/dist/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    layui.use(['form', 'layedit', 'laydate'], function () {
        var form = layui.form,
            layer = layui.layer,
            layedit = layui.layedit,
            laydate = layui.laydate;

        //自定义验证规则
        form.verify({
            username: function (value) {
                if (value.length < 1) {
                    return '请输入姓名';
                } 
                else if (value.length > 30) {
                    return '姓名最多10个字';
                }
            },
            sno:[/^\d*$/, '请输入全为数字的学号'],
        });


        //表单初始赋值
        // form.val('example', {
        //   "username": "" // "name": "value"
        //   ,"password": "123456"

        // })

    });
</script>
</body>

</html>
