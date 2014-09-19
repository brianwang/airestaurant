{extends file='layouts\main.tpl'}
{block name=content}
    <form action="{site_url('/rest/create')}" method='post'>
        <div>
            <input type="text" name="name" placeholder="商店名称">
        </div>  
        <div>
            <input type="text" name="startprice" placeholder="起送价格"></div>
        <div>
            <input type="text" name="notice" placeholder="公告"></div>
        <div>
            <input type="text" name="address" placeholder="地址"></div>
        <div>
            <input type="text" name="opentime" placeholder="开门时间">-<input type="text" name="endtime" placeholder="关门时间">
        </div>
        <div>
            <input type="text" name="description" placeholder="商店名称">
        </div>
        <div>
            <input type="text" name="phone" placeholder="电话">
        </div>
        <div>
            {for $k=1 to 7}
                <input type="checkbox" name="week[]" value="{$k}" checked>周{$k}
            {/for}
        </div>
        <input type="submit">
    </form>
{/block}