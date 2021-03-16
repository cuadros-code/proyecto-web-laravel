<template>
  <input
    type="submit"
    value="Eliminar Usuario"
    class="btn btn-danger mb-2"
    v-on:click="eliminaUsuario"
  />
</template>

<script>
export default {
  props: ["IdUsuario"],
  methods: {
    eliminaUsuario() {
      this.$swal({
        title: "Esta seguro que desea eliminar el usuario",
        text: "despues de eliminarlo no podra recuperarser",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          const params = {
            id: this.IdUsuario,
          };

          //-peticion de eliminacion

          axios
            .post(`/admin/${this.IdUsuario}`, { params, _method: "delete" })
            .then((res) => {
              this.$swal(
                "Usuario Eliminado!",
                "se ha eliminado el usuario",
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