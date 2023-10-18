{include file="header.tpl"}



<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="text">User</label>
            <input type="text" required class="form-control" id="user" name="user">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

   
       
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
        {if $error}
            <div class= "alert alert-danger mt-3">
                {$error}
            </div>
        {/if}    
        </form>
</div>

{include file="footer.tpl"};
