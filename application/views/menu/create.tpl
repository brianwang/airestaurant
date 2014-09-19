{extends file='layouts\main.tpl'}
{block name=content}
    {validation_errors()}
    <form action="{site_url('/menu/create')}" method='post' class="form">
        <div >
            <span>菜单名称</span>
            <input type="hidden" name="creator_id" class="form-control" value='{$smaryt.session.user.id}'>
            <input type="text" name="name" class="form-control">
        </div>
        <div>
            <span>选择商店</span>
            <select name='rest_id'>
                {foreach from=$rests item=rest}
                    <option value='{$rest.id}'>{$rest.name}</option>
                {/foreach}
            </select>
        </div>
        <div>
            <span>菜单描述</span>
            <input type="text" name="description">
        </div>
       
        <input type="submit"/>
    </form>
{/block}