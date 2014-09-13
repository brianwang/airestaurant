{extends file='layouts\main.tpl'}
{block name=content}
    {validation_errors()}
    <form action="{site_url('/rest/create')}" method='post' class="form">
        <div >
            <span>商店名称</span>
            <input type="text" name="name" class="form-control">
        </div>
        <div>
            <span>商店地址</span>
            <input type="text" name="address">
        </div>
        <div>
            <span>联系电话</span>
            <input type="text" name="phone">
        </div>
        <div>
            <span>营业时间(9:00-20:00)</span>
            <input type="text" name="opentime" value="9:00">-<input type="text" name="endtime" value="20:00">            
        </div>
        <div>
            <span>详细介绍</span>
            <textarea name="description"></textarea>
        </div>
        <div>
            <span>起定价格</span>
            <input type="text" name="startprice" value="50">
        </div>
        <div>
            <span>公告</span>
            <input type="text" name="notice">            
        </div>
        <div>
            <span>每周营业时间</span>
            <input type="checkbox" name="week[]" checked value="1">周一            
            <input type="checkbox" name="week[]" checked value="2">周二
            <input type="checkbox" name="week[]" checked value="3">周三
            <input type="checkbox" name="week[]" checked value="4">周四
            <input type="checkbox" name="week[]" checked value="5">周五
            <input type="checkbox" name="week[]" checked value="6">周六
            <input type="checkbox" name="week[]" checked value="7">周日
        </div>
        <input type="submit"/>
    </form>
{/block}