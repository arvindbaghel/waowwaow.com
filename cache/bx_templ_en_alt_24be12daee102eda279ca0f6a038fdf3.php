<div class="slideout">
    <img class="iopen" src="http://waowwaow.com/modules/andrew/fchat/templates/base/images/toggle.png" alt="" />
    <div class="slideout_inner">
        <img class="iclose" src="http://waowwaow.com/modules/andrew/fchat/templates/base/images/bclose.png" alt="" />
        <input type="text" class="fchFilter" name="filter" id="filter" placeholder="Filter" value="Filter" onclick="if(this.value == 'Filter') this.value='';" onblur="if(this.value.length == 0) this.value='Filter';">
        <script>
            $('input.fchFilter').keyup(function() {
                var fchFiKe = $(this).val();

                if (fchFiKe) {
                    $('.profiles > div').hide();
                    $('.profiles > div:contains("'+fchFiKe+'")').show();
                } else {
                    $('.profiles > div').show();
                }
            });
        </script>
        <div class="clear_both"></div>
        <br />
        <div class="fch_groups">
            <?php if($a['bx_if:show_onlinefriends']['condition']){ ?>
            <div>
                <h2>Online Friends</h2>
                <?=$a['bx_if:show_onlinefriends']['content']['online_friends'];?>
            </div>
            <div class="clear_both"></div>
            <?php } ?>
            <?php if($a['bx_if:show_online']['condition']){ ?>
            <div>
                <h2>Online Members</h2>
                <?=$a['bx_if:show_online']['content']['online_members'];?>
            </div>
            <div class="clear_both"></div>
            <?php } ?>
            <?php if($a['bx_if:show_friends']['condition']){ ?>
            <div>
                <h2>My Friends</h2>
                <?=$a['bx_if:show_friends']['content']['friends'];?>
            </div>
            <div class="clear_both"></div>
            <?php } ?>
            <?php if($a['bx_if:show_last']['condition']){ ?>
            <div>
                <h2>Last Members</h2>
                <?=$a['bx_if:show_last']['content']['last_members'];?>
            </div>
            <div class="clear_both"></div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="priv_dock_wrap"></div>
<div class="priv_dock_wrap_sessions"><p>Dialogs</p></div>