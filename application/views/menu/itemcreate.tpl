{extends file='layouts\main.tpl'}
{block name=content}
    {validation_errors()}
    <form action="{site_url('/item/create')}" method='post' class="form">
        <div>
            <span>菜品名称</span>
            <input type="text" name="name" class="form-control">
        </div>
        <div>
            <span>我的饭店</span>
            <select name='rest_id'>
                {foreach from=$rests item=rest}
                    <option value='{$rest.id}'>{$rest.name}</option>
                {/foreach}
            </select>
        </div>
        <div>
            <span>我的菜单</span>
            <select name='menu_id'>
                {foreach from=$menus item=menu}
                    <option value='{$menu.id}'>{$menu.name}</option>
                {/foreach}
            </select>
        </div>
        <div>
            <span>菜品价格</span>
            <input type="text" name="value" class="form-control">
        </div>
        <div>
            <span>菜单描述</span>
            <input type="text" name="description">
        </div>

        <input type="submit"/>
    </form>
{/block}