<template>
  <input
    value="Eliminar Cuenta"
    class="btn btn-danger"
    v-on:click="eliminaMascota"
  />
</template>

<script>
export default {
  props: ["IdProfile"],
  methods: {
    eliminaMascota() {
      this.$swal({
        title: "Esta seguro que desea eliminar esta cuenta",
        text: "despues de eliminar la cuenta no podra recuperarser",
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
          axios
            .post(`/profile/${this.IdMascota}`, {
              params,
              _method: "DELETE",
            })
            .then((res) => {
              this.$swal(
                "Cuenta Eliminada!",
                "se ha eliminado la cuenta",
                "success"
              );
              setTimeout(() => {
                location.reload();
              }, 1500);
            })
            .catch((err) => console.log(err));
        }
      });
    },
  },
};
</script>