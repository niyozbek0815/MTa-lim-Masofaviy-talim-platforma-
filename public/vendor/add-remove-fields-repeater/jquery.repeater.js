(function ($) {
  $.fn.repeater = function (options) {
    // Default params
    var params = $.extend(
      {
        structure: [],
        items: [],
        repeatElement: "structure",
        createElement: "createElement",
        removeElement: "removeElement",
        containerElement: "containerElement",
        groupName: "data",
      },
      options
    );

    var repeater = this;

    repeater.find("#" + params.createElement).click(function () {
      var cloned = repeater.find("#" + params.repeatElement).clone();
      var inputs = cloned.find(":input");
      var newItem = [];
      $.each(inputs, function (key, input) {
        var next = params.items.length;
        newItem.push({
          id: $(input).attr("id"),
          value: "",
        });
        $(input).attr(
          "name",
          params.groupName + "[" + next + "][" + $(input).attr("name") + "]"
        );
      });
      cloned
        .find(".row")
        .append(
          '<div class="col"> <label class="mt-5"></label> <span class="d-inline"> <input type="button" class="btn btn-danger ' +
            params.removeElement +
            '" value="-" /> </span> </div>'
        );
      cloned.find("." + params.removeElement).click(function () {
        $(this).parent().parent().parent().remove();
        if (params.onRemove !== undefined) {
          params.onRemove();
        }
      });
      cloned.show();
      cloned.appendTo("#" + params.containerElement);
      if (params.onShow !== undefined) {
        params.onShow();
      }
      params.items.push(newItem);
    });

    if (params.items.length > 0) {
      $.each(params.items, function (key1, item) {
        if (key1 == 0) {
          var cloned = repeater.find("#" + params.repeatElement).clone();
          var inputs = cloned.find(":input");
          $.each(inputs, function (key2, input) {
            $(input).attr(
              "name",
              params.groupName + "[" + key1 + "][" + $(input).attr("name") + "]"
            );
          });
          cloned
            .find(".row .actionBtn")
            .append(
              '<label class="mt-5"></label> <span class="d-inline"> <input type="button" class="btn btn-success" id="' +
                params.createElement +
                '" value="+" /> </span>'
            );
          $.each(item.elements, function (index, element) {
            cloned.find("#" + element.id).val(element.value);
          });
          cloned.find("#" + params.createElement).click(function () {
            var cloned = repeater.find("#" + params.repeatElement).clone();
            var inputs = cloned.find(":input");
            var newItem = [];
            $.each(inputs, function (key, input) {
              var next = params.items.length;
              newItem.push({
                id: $(input).attr("id"),
                value: "",
              });
              $(input).attr(
                "name",
                params.groupName +
                  "[" +
                  next +
                  "][" +
                  $(input).attr("name") +
                  "]"
              );
            });
            cloned
              .find(".row")
              .addClass("mt-3")
              .find(".actionBtn")
              .append(
                '<label class="mt-5"></label> <span class="d-inline"> <input type="button" class="btn btn-danger ' +
                  params.removeElement +
                  '" value="-" /> </span>'
              );
            cloned.find("." + params.removeElement).click(function () {
              $(this).parent().parent().parent().remove();
              if (params.onRemove !== undefined) {
                params.onRemove();
              }
            });
            cloned.show();
            cloned.appendTo("#" + params.containerElement);
            if (params.onShow !== undefined) {
              params.onShow();
            }
            params.items.push(newItem);
          });
          cloned.show();
          cloned.appendTo("#" + params.containerElement);
        } else {
          var cloned = repeater.find("#" + params.repeatElement).clone();
          var inputs = cloned.find(":input");
          $.each(inputs, function (key2, input) {
            $(input).attr(
              "name",
              params.groupName + "[" + key1 + "][" + $(input).attr("name") + "]"
            );
          });
          cloned
            .find(".row")
            .addClass("mt-3")
            .find(".actionBtn")
            .append(
              '<label class="mt-5"></label> <span class="d-inline"> <input type="button" class="btn btn-danger ' +
                params.removeElement +
                '" value="-" /> </span>'
            );
          cloned.find("." + params.removeElement).click(function () {
            $(this).parent().parent().parent().remove();
            if (params.onRemove !== undefined) {
              params.onRemove();
            }
          });
          $.each(item.elements, function (index, element) {
            cloned.find("#" + element.id).val(element.value);
          });
          cloned.find("#" + params.createElement).click(function () {
            var cloned = repeater.find("#" + params.repeatElement).clone();
            var inputs = cloned.find(":input");
            var newItem = [];
            $.each(inputs, function (key, input) {
              var next = params.items.length;
              newItem.push({
                id: $(input).attr("id"),
                value: "",
              });
              $(input).attr(
                "name",
                params.groupName +
                  "[" +
                  next +
                  "][" +
                  $(input).attr("name") +
                  "]"
              );
            });
            cloned
              .find(".row")
              .addClass("mt-3")
              .find(".actionBtn")
              .append(
                '<label class="mt-5"></label> <span class="d-inline"> <input type="button" class="btn btn-danger ' +
                  params.removeElement +
                  '" value="-" /> </span>'
              );
            cloned.find("." + params.removeElement).click(function () {
              $(this).parent().parent().parent().remove();
              if (params.onRemove !== undefined) {
                params.onRemove();
              }
            });
            cloned.show();
            cloned.appendTo("#" + params.containerElement);
            if (params.onShow !== undefined) {
              params.onShow();
            }
            params.items.push(newItem);
          });
          cloned.show();
          cloned.appendTo("#" + params.containerElement);
        }
      });
    }
  };
})(jQuery);
