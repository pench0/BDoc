<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Subir fichero</div>

                <div class="panel-body">
                    <form action="{{('/upload')}}" method="post" role="form" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="thumbnail" class="col-md-4 control-label">Imagen</label>
                            <div class="col-md-6">
                                <input type="file" id="thumbnail" name="thumbnail" class="form-control">
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
                            <label for="keykords" class="col-md-4 control-label">Palabras clave</label>
                            <div class="col-md-6">
                                <input type="text" id="keykords" name="keywords" class="form-control">
                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label for="file" class="col-md-4 control-label">Fichero</label>
                            <div class="col-md-6">
                                <input type="file" id="file" name="file" class="form-control">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>