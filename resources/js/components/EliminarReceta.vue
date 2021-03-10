<template>
        <input 
            type="submit" 
            value="Eliminar" 
            class="btn btn-danger mb-2"
            v-on:click="eliminaReceta"
        >                    
</template>

<script>
export default {
    props: ['recetaId'],
    methods:{
        eliminaReceta(){
            this.$swal({
                title: 'Esta seguro que desea eliminar la publicación',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    const params={
                        id: this.recetaId,
                    }

                    //-peticion de eliminacion

                    axios.post(`/adopcion/${this.recetaId}`,{params, _method:'delete'})
                    .then(res => {
                        this.$swal(
                        'Publicacion Eliminada!',
                        'se ha eliminado la publicación',
                        'success'
                        )

                        this.$el.parentNode.parentNode.parentNode
                        .removeChild(this.$el.parentNode.parentNode)

                    })
                    .catch((err) => console.log(err))

                    
                }
                })
        }
    }
}
</script>