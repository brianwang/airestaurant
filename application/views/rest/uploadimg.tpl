{extends file='layouts\main.tpl'}
{block name=content}
    {validation_errors()}
    <form method='post' class="form" enctype="multipart/form-data">
        <div>
            <span>商店ID</span>
            <input type="text" name="restid" class="form-control" value="{$restid}" disabled="disabled" readonly>
        </div>
        <div>
            <input type="file" name="imgs[]" multiple>
        </div>
        <input type="submit">
    </form>
{/block}