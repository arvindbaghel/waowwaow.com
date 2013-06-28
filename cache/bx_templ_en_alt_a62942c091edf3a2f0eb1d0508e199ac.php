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
