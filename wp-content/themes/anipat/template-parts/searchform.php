<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder='Search Keyword' value="<?php echo get_search_query(); ?>"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" name="s">
            <div class="input-group-append">
                <button class="btn" type="button"><i class="ti-search"></i></button>
            </div>
        </div>
    </div>
    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
</form>

<form role="search" method="get" id="searchformEm" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <input type="email" class="form-control" onfocus="this.placeholder = ''" value="<?php echo get_search_query(); ?>"
            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' name="em" required>
    </div>
    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
        type="submit">Subscribe</button>
</form>