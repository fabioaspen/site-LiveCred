

<!--formulário de busca personalizado para widget-->
<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
        <input type="search" class="form-control" placeholder="Ex: Crédito pessoal" value="<?php echo get_search_query(); ?>" name="s">
        <div class="input-group-append">
            <button class="btn btn-lc-orange" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
        