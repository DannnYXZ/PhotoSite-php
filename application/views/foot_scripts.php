<? if(isset($run_scripts)): ?>
    <?='<script>'?>
        <?foreach($run_scripts as $script) :?>
            <? echo $script; ?>
        <? endforeach; ?>
    <?='</script>'?>
<? endif ?>
<? if(isset($foot_scripts)): ?>
    <? foreach($foot_scripts as $script) :?>
        <? echo '<script src="'.'/js/'.$script.'"></script>'; ?>
    <? endforeach; ?>
<? endif ?>