<template>
  <input
    type="submit"
    value="Eliminar Mascota"
    class="btn btn-danger mb-2"
    v-on:click="eliminaMascota"
  />
</template>

<script>
export default {
  props: ["IdMascota"],
  methods: {
    eliminaMascota() {
      this.$swal({
        title: "Esta seguro que desea eliminar la publicación",
        text: "despues de eliminar la publicacion no podra recuperarser",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          const params = {
            id: this.idMascota,
          };

          //-peticion de eliminacion

          axios
            .post(`/admin/mascota/${this.IdMascota}`, {
              params,
              _method: "delete",
            })
            .then((res) => {
              this.$swal(
                "Publicación Eliminada!",
                "se ha eliminado la publicacion",
                "success"
              );

              this.$el.parentNode.parentNode.parentNode.removeChild(
                this.$el.parentNode.parentNode
              );
            })
            .catch((err) => console.log(err));
        }
      });
    },
  },
};
</script>