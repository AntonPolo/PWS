<!-- Формы редактирования главной страницы -->
<form id="form_slider_img" enctype="multipart/form-data" method="post" style="margin-bottom: 20px;">
    <p>Загрузка нового изображения для слайдера</p>

    <div style="display: flex;align-content: center;align-items: center; gap:10px;">
        <span style="background: #50a0ff; padding: 5px 10px; height: 40px; color: #fff; display: flex; align-items: center; cursor: pointer; max-width: 197px;">
            <img src="/img/download.png" alt="Выберите файл" style="height: 30px;">
            <!--<label for="slide-img" style="cursor: pointer;">Выберите файл</label>-->

            <input type="file" name="slider_img" id="slide-img" accept="image/jpeg,image/png">
        </span>
        <!--<label for="slide-img" class="file" style="background: #50a0ff; border: 1px solid #50a0ff;height: 40px;color: #ffffff;padding: 5px 10px;display: flex;align-items: center; gap: 10px;cursor: pointer;" title="Выбрать изображение"><img src="/img/download.png" title="Выбрать изображение" width="24px" height="24px">
            Выберите файл
        </label>-->

        <input type="submit" id="add_new_slide" value="Отправить" style="margin: 0; width: auto; border-radius: 0;">
        <label for="add_new_slide" id="add_new_slide_message"></label>
    </div>
</form>

<p>Удаление изображения из слайдера</p>
<div class="del_img" style="display: flex;">

    <?php
    $slide_count = get_count_all_slide_url();
    $slide_urls = get_all_slide_url("");
    if ($slide_count == 0) {
    ?>
        <p>Изображений на слайдере нет</p>
        <?
    } else {
        foreach ($slide_urls as $slide_url) :
        ?>

            <div class="container">
                <div>
                    <span class="close-image-icon">
                        <button type="button" style="background: 0;border: 0;margin: 20px" onclick="deleteSlide('<?php echo $slide_url['slider_img_url']; ?>')" class="deleteSlide close" aria-label="Close" title="Удалить">
                            <span aria-hidden="true" style="color: red;font-size: 40px">&times;</span>
                        </button>
                    </span>
                    <img class="img-thumbnail img-fluid w-100" src="<?php echo $slide_url['slider_img_url']; ?>">
                </div>
            </div>

    <?php
        endforeach;
    }
    ?>

</div>