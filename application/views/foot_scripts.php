<? if($run_scripts): ?>
    <?='<script>'?>
        <?foreach($run_scripts as $script) :?>
            <? echo $script; ?>
        <? endforeach; ?>
    <?='</script>'?>
<? endif ?>
<? foreach($foot_scripts as $script) :?>
    <? echo '<script src="'.'/js/'.$script.'"></script>'; ?>
<? endforeach; ?>