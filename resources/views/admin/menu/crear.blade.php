@extends("theme.$theme.layout")
@section('titulo')
Sistema Menús
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-success card-outline">
            <div class="card-header">
                <h3 class="card-title">Crear Menús</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                        @csrf

                        <div class="card-body">
                            @include('admin.menu.form')
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="col-lg-3 "></div>
                            <div class="col-lg-6 ml-5 ">
                                @include('includes.boton-form-crear')
                            </div>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection