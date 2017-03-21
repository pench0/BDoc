@extends('layouts.loged')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Subir fichero</div>

                    <div class="panel-body">
                        <form action="{{'/upload'}}" method="post" role="form" class="form-horizontal">

                            <div class="form-group">
                                <label for="avatarImg" class="col-md-4 control-label">Imagen</label>
                                <div class="col-md-6">
                                    <input type="file" id="avatarImg" name="avatarImg" class="form-control" formenctype="multipart/form-data">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Nombre fichero</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" class="form-control" required autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Descripción</label>
                                <div class="col-md-6">
                                    <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="keywords" class="col-md-4 control-label">Palabras clave</label>
                                <div class="col-md-6">
                                    <input type="text" id="keywords" name="keywords" class="form-control">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="file" class="col-md-4 control-label">Fichero</label>
                                <div class="col-md-6">
                                    <input type="file" id="file" name="file" class="form-control" formenctype="multipart/form-data">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
