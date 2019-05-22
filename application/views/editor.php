<div class="editor">
    <nav class="side-panel">
        <a class="side-panel__link" href="/editor/topics">
            <div class="side-panel__tab">
                <span class="side-panel__tab-name">Topics</span>
            </div>
        </a>
    </nav>
    <section class="main-panel">
        <? if (isset($active_tab)) : ?>
            <? foreach ($topics as $topic) : ?>
                <section class="topic topic_marg" style="background-image: url(<?= $topic[4] ?>);">
                    <form method="post" action="/editor/update_topic" enctype="multipart/form-data">
                        <h3> <?= $topic[1] ?> </h3>
                        <div class="topic__elem">
                            <span> Topic Name: </span> <input type="text" name="topic_name" value="<?= $topic[1] ?>">
                        </div>
                        <div class="topic__elem">
                            <span> Caption: </span> <input type="text" name="topic_caption" value="<?= $topic[2] ?>">
                        </div>
                        <div class="topic__elem">
                            <span> Preview: </span> </span> <input type="text" name="topic_preview_path" disabled value="<?= $topic[4] ?>"> <br>
                            <input type="file" name="preview_path"> </br>
                        </div>
                        <div class="topic__elem">
                            <span> Source dir: </span> <input type="text" name="source_dir" value="<?= $topic[3] ?>">
                        </div>
                        <!--div class="topic__elem">
                            <span> Add images: </span> <input type="file" name="add_files[]" multiple>
                        </div-->

                        <!--span> Tick images to be removed: </span> <br>
                        <ul class="files">
                            <li><input name="file_name1" type="checkbox">f1 </li>
                            <li><input name="file_name2" type="checkbox">f2</li>
                            <li><input name="delete_file[]" type="checkbox">KEK </li>
                        </ul>
                        <span> Add images: </span> <input type="file" name="add_files[]" multiple-->
                        <input type="hidden" name="topic_id" value="<?= $topic[0] ?>">
                        <input type="submit" value="Apply">
                    </form>
                    <form class="form-remove" action="/editor/remove_topic" method="post">
                        <input type="hidden" name="topic_id" value="<?= $topic[0] ?>">
                        <input type="submit" value="Remove">
                    </form>
                </section>
            <? endforeach; ?>
            <form action='/editor/add_topic' method="post">
                <input type="submit" name="add_topic" value="Add Topic">
            </form>
        <? endif ?>
    </section>
</div>