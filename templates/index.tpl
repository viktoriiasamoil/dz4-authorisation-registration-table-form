
{extends file="layout.tpl"}

{block name="body"}
    <div class="row">
        <div class="col-md-3">
            {if isset($smarty.session.user.json)}
                <form action="http://?action=create" method="POST">
                    <input type="text" name="name" placeholder="Your name">
                    <input type="text" name="phone" placeholder="+38000000000">
                    <input type="submit" name="Submit">
                </form>
            {/if}
        </div>
{/block}