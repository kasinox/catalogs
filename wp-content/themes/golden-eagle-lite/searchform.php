<form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div>
        <input onfocus="if (this.value == 'Search') {
                    this.value = '';
                }" onblur="if (this.value == '') {
                            this.value = '<?php _e('Search', 'golden-eagle-lite'); ?>;
                        }"  value="<?php _e('Search', 'golden-eagle-lite'); ?>" type="text" value="" name="s" id="s" />
        <input type="submit" value="" name="submit"/>
    </div>
</form>
<div class="clear"></div>
