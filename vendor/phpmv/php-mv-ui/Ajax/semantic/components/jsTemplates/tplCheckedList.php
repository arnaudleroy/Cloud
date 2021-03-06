<?php
return '$("%identifier% .master")
  .checkbox({
    onChecked: function() {$(this).closest(".checkbox").siblings(".list").find(".checkbox").checkbox("check");},
    onUnchecked: function() {$(this).closest(".checkbox").siblings(".list").find(".checkbox").checkbox("uncheck");}
  })
;
$("%identifier% .list .child.checkbox")
  .checkbox({
    fireOnInit : true,
    onChange   : function() {
      var
        $listGroup      = $(this).closest(".list"),
        $parentCheckbox = $listGroup.closest(".item").children(".checkbox"),
        $checkbox       = $listGroup.find(".checkbox"),
        allChecked      = true,
        allUnchecked    = true
      ;
      $checkbox.each(function() {
        if( $(this).checkbox("is checked") ) {
          allUnchecked = false;
        }
        else {
          allChecked = false;
        }
      });
      if(allChecked) {
        $parentCheckbox.checkbox("set checked");
      }
      else if(allUnchecked) {
        $parentCheckbox.checkbox("set unchecked");
      }
      else {
        $parentCheckbox.checkbox("set indeterminate");
      }
    }
  })
;';