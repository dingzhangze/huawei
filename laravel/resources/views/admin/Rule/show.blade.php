<style>
    table {
        font-size:13px;
        border-spacing: 10px;
    }
</style>
<form method="post" action="/Admin/rule/{{$rule->id}}">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<input type="hidden" name="_method" value="PUT" />
<table  class="bordered">
    <tr>
        <td>权限：</td>
        <td><input type="text" name="name" value="{{$rule->name}}" /></td>
    </tr>
    <tr>
        <td>名称：</td>
        <td><input type="text" name="title" value="{{$rule->title}}" /></td>
    </tr>
    <tr>
        <td>状态：</td>
        <td><input type="radio" name="status" value="1" @if($rule->status == "1") checked @endif />有效
            <input type="radio" name="status" value="0" @if($rule->status == "0") checked @endif />禁用
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="修改" /></td>
    </tr>
</table>
</form>