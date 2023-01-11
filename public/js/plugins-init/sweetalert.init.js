"use strict";
jQuery(function () {
  $(".sweet-confirm").click(function (e) {
    e.preventDefault();
    let form = $(this).parents("form");
    Swal.fire({
      title: "Do you want to change status",
      showDenyButton: true,
      icon: "warning",
      confirmButtonText: "Yes!",
      cancelButtonText: "No",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          icon: "success",
          title: "Your work has been changed",
          showConfirmButton: false,
          timer: 1000,
        });
        setTimeout(() => {
          form.submit();
        }, 1001);
      }
    });
  });
});
