function controlBorrado(path, reserva){

    swal({
        title: "Seguro que quiere eliminar el elemento",
        text: "Una vez eliminada la reserva "+reserva+" no podra recuperar los datos" ,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("El elmento fue eliminado correctamente", {
            icon: "success",
          });
         re
          document.location.replace(path);
        } 

      });
      
}