<?php if (!defined('THINK_PATH')) exit();?>
    <!-- UEditor -->
   <script type="text/javascript" charset="utf-8" src="/Public/UEditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/UEditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Public/UEditor/lang/zh-cn/zh-cn.js"></script>




    <style type="text/css">
        .UEditor{
            width:100%;
            padding-top:10px;
            padding-bottom:10px;   
        }

    </style> 
    




<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
        <p>欢迎你：<?php echo (session('username')); ?></p>
             
               <li class="active"><i ></i>发布通知</li>
            </ol>
	</div>
</div>
<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    var ue = UE.getFilePath('content');
    // ue.ready(function(){
    //     ue.getFilePath();
    // });


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
<!-- 编辑器 -->
<div class="row" >
<form id="task" action="/index.php/Notice/doNotice" method="post" enctype="multipart/form-data">
		<div>
			<input type="radio" name="kind" value="0"/> 教务网信息 <br />
			<input type="radio" name="kind" value="1"/> 各科作业通知 <br />
			<input type="radio" name="kind" value="2"/> 考试信息 <br />
			<input type="radio" name="kind" value="3"/> 课程安排 <br />
			<input type="radio" name="kind" value="4"/> 其他 <br />




		</div>


		<div>
			<h2>标题</h2>
			<div class="col-sm-8">
			<input type="text" name="title" class="form form-control" placeholder="请输入标题"/>
			</div>
		</div>
		<br/>
		<div class="UEditor">
		    <h2>内容</h2>
		    <script id="editor" name="content"  type="text/plain" style="width:750px;height:300px;"></script>
        </div>
        <div id="status">

        </div>
        <!-- <div>
            <h3>附加文件</h3>
            <input type="file" name="upload"/>
            
        </br>
        <div> -->
            
        </div>
		<div class="col-sm-2">
        <input type="text" name="name" style="visibility: hidden;" value="<?php echo (session('username')); ?>" />
		<button type="submit" class="btn btn-primary" id="submit">提交</button>
		</div>
</form>
			<br/>