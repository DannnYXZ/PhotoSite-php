<div class="editor">
    <nav class="side-panel">
        <a class="side-panel__link" href="editor/topics">
            <div class="side-panel__tab">
                <span class="side-panel__tab-name">Topics</span>
            </div>
        </a>
    </nav>
    <section class="main-panel">
        <? if (!isset($active_tab)) : ?>
            <h1>Topics</h1>
            <hr>
            <? foreach ($topics as $topic) : ?>
                <form class="topic topic_marg" method="post" action="/editor/apply" enctype="multipart/form-data">
                    <h3> <?= $topic[1] ?> </h3>
                    <span> Preview: <?= $topic[5] ?> </span> <input type="file"> </br>
                    <span> Source dir: </span> <input type="text" name="source-dir" value="<?= $topic[3] ?>"> </br>
                    <span> Tick images to be removed: </span> <br>
                    <ul class="files">
                        <li><input name="file_name1" type="checkbox">f1 </li>
                        <li><input name="file_name2" type="checkbox">f2</li>
                        <li><input name="delete_file[]" type="checkbox">KEK </li>
                        <li><input name="delete_file4" type="checkbox">KEK </li>
                        <li><input name="delete_file5" type="checkbox">KEK </li>
                        <li><input name="delete_file6" type="checkbox">KEK </li>
                        <li><input name="delete_file7" type="checkbox">KEK </li>
                        <li><input name="delete_file8" type="checkbox">KEK </li>
                        <li><input name="delete_file9" type="checkbox">KEK </li>
                        <li><input name="delete_file0" type="checkbox">KEK </li>
                    </ul>
                    <span> Add images: </span> <input type="file" name="add_files[]" multiple>
                    <input type="submit" value="Apply">
                </form>
            <? endforeach; ?>
        <? endif ?>
    </section>
</div>