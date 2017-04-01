/**
 * Created by jml on 2017/4/1.
 */
$(function(){
    var $areaContainer = $("#area-group");
    var $button = $(".btn-add");
    var $remove = $(".fa-remove");
    $button.click(
        function(){
            var $item = $areaContainer.find(".repeat-item:first").clone(true);
            $item.find('input').val("");
            $areaContainer.append($item)
        });
    $remove.click(function(){
       $(this).parent().parent().parent().remove();
    });
})