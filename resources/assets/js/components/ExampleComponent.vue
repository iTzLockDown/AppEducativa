<template>
    <template>

        <div class="row">
            <div class="col-md-12">

                <h2 class="page-title">PANEL DE ADMINISTRACION DE Docentes</h2>
            </div>
        </div>


        <div class="panel panel-info" >
            <div class="panel-heading">
                <h3 class="panel-title">Docentes</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="" align="right">

                            <a href="/admin/credocente" class="btn btn-linkedin btn-sm"><i class="fa fa-users"></i> Nuevo Docente</a>
                            <input type="text" class="input-sm">

                            <a href="#" class="btn btn-tumblr btn-sm"><i class="fa fa-search"></i> Buscar</a>
                        </div>
                        <br>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Profecion</th>
                                <th colspan="2"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr v-for=" docente in docentes">
                                <td>{{ docente.id}}</td>
                                <td> {{docente.nombre}}</td>
                                <td> {{docente.profecion}}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm"> Editar</a>
                                </td>
                                <td>
                                    <a href=""  class="btn btn-danger btn-sm"> Eliminar</a>
                                </td>
                            </tr>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </template>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
