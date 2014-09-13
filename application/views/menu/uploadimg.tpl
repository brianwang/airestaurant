{extends file='layouts\main.tpl'}
{block name=content}
    {validation_errors()}
    <form action="{site_url('/menu/create')}" method='post' class="form">
        <div >
            <span>商店ID</span>
            <input type="text" name="name" disabled="disabled" readonly>
        </div>
        <div>
        </div>
        <input type="submit"/>
    </form>
{/block}