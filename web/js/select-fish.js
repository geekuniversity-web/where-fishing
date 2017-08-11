$(document).ready(function () {

    //Реагирует на изменения в одном из блоков, в которых содержится select
    $('.result-search .form-result__cont').change(eventOptionFish);

    function eventOptionFish(event) {

        var classSelect = '.jcf-select-' + $(event.currentTarget).attr('class').slice(0, 13) + 'select';
        var classCloseSelect = $(event.currentTarget).attr('class').slice(31) + '-name';
        var selectedOptions = $(classSelect + ' .jcf-selected');

        //Удаление всех выбранных блоков под select
        $('.' + classCloseSelect).remove();

        //Перебор по массиву выбранных элементов в select
        for (var i = 0; i < selectedOptions.length; i++) {
            var closeSelect = $('<div class="close-select">' +
                '<span class="close-select__span">' + $(selectedOptions[i]).text() + '</span>' +
                '<img src="images/del.png" alt="" class="close-select__img">' +
                '</div>');

            $(closeSelect).addClass(classCloseSelect);

            //Вставка блока выбранного элемента под select
            $(event.currentTarget).append(closeSelect);

            //Реагирует на клик по блоку
            $(closeSelect).click(eventBlockFish);
        }
    }

    function eventBlockFish(event) {

        var options = $('.form-result__' + $(event.currentTarget).attr('class').slice(13, -5)
            + ' select' + ' option');

        var selectId = $('.form-result__' + $(event.currentTarget).attr('class').slice(13, -5)
            + ' select').attr('id');

        var select = '<select class="form-result__select" ' +
            'id="' + selectId + '" ' +
            'multiple ' +
            'data-jcf=\'{"wrapNative": false, "wrapNativeOnMobile": false, ' +
            '"useCustomScroll": false, "multipleCompactStyle": true}\'>';

        //Вставляет в переменную select варианты
        for (var i = 0; i < options.length; i++) {
            select += '<option value="v2">' + $(options[i]).text() + '</option>';
        }

        select += '</select>';

        //Удаляет все блоки под select
        $('.' + $(event.currentTarget).attr('class').slice(13)).remove();

        //Удаляет select, генерируемый js
        $('.form-result__' + $(event.currentTarget).attr('class').slice(13, -5)
            + ' .jcf-select-form-result__select').remove();

        //Удаляет реальный select, заданный в html
        $('.form-result__' + $(event.currentTarget).attr('class').slice(13, -5)
            + ' .form-result__select').remove();

        //Вставляет реальный select в html уже без выделенных пунктов
        $('.form-result__' + $(event.currentTarget).attr('class').slice(13, -5)).append(select);

        //Генерирует select нужной формы
        jcf.replaceAll();
    }
});
