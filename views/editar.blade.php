

 @extends ('adminsite.layout')

 @section('cabecera')
    <script src="/estadistica/chartkick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
    <!-- <script src="Chart.bundle.js"></script> -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
     <script>
      // Chartkick.configure({language: "de"});
      // Chartkick.configure({mapsApiKey: "test123"})
      // Chartkick.options = {colors: ["#b00", "#666"]};
      // Chartkick.options = {legend: "right"};
      // Chartkick.options = {title: "Bingo"};

      var CustomAdapter = new function () {
        this.name = "custom";

        // this.renderLineChart = function (chart) {
        //   chart.getElement().innerHTML = "Hi";
        // };

        this.renderCustomChart = function (chart) {
          chart.getElement().innerHTML = "Custom Chart";
        };
      };

      Chartkick.CustomChart = function (element, dataSource, options) {
        Chartkick.createChart("CustomChart", this, element, dataSource, options);
      };

      Chartkick.adapters.unshift(CustomAdapter);
    </script>

    <style>

      Rect {
   stroke: black;
   fill: #d8d8d8;
 }
      h1 {
        text-align: center;
      }


.table-striped tr {display: block; }
.table-striped th, td { width: 400px; }
.table-striped tbody { display: block; height: 230px; overflow: auto;} 
    </style>


 @parent
 
 @stop


 @section('ContenidoSite-01')

 <div class="content-header">
     <ul class="nav-horizontal text-center">
 <li>
       <a href="/gestion/calendario"><i class="fa fa-calendar"></i> Calendario</a>
      </li>

      <li>
       <a href="/gestion/crear-evento"><i class="fa fa-calendar-plus-o"></i> Crear Evento</a>
      </li>
     </ul>
    </div>
    
<div class="container">
  
   <div class="col-md-12">
                                <!-- Horizontal Form Block -->
                                <div class="block">
                                    <!-- Horizontal Form Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            
                                        </div>
                                        <h2><strong>Evento</strong> - {{$eventos->title}}</h2>
                                    </div>
                                    <!-- END Horizontal Form Title -->

                                    <!-- Horizontal Form Content -->
                                    <form class="form-horizontal form-bordered">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-email">Tipo de Evento</label>
                                            <div class="col-md-9">
                                             <h5>   {{$eventos->class}}</h5>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-password">Fecha Inicio</label>
                                            <div class="col-md-9">
                                                 <h5>{{$eventos->start_old}}</h5>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-password">Fecha Finalización</label>
                                            <div class="col-md-9">
                                                <h5>{{$eventos->end_old}}</h5>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-password">Descripción Evento</label>
                                            <div class="col-md-9">
                                                <h5>{{$eventos->body}}</h5>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                  <a type="submit" class="btn btn-sm btn-primary" href="<?=URL::to('gestion/calendario/eliminar/');?>/{{$eventos->id}}" onclick="return confirm('¿Está seguro que desea eliminar el registro?')">Eliminar</a>
                                                <a type="submit" class="btn btn-sm btn-warning" href="<?=URL::to('gestion/calendario/editar-evento/');?>/{{$eventos->id}}">Editar</a>
                                              
                                            </div>
                                        </div>
                                  </form>
                                    <!-- END Horizontal Form Content -->
                                </div>
                                <!-- END Horizontal Form Block -->

</div>
</div>

  





   <footer>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.ckeditor.com/4.6.0/full/ckeditor.js"></script>
   {{ Html::script('ckfinder/ckfinder.js') }}   



    {{ Html::script('Usuario/js/Actualizar.js') }}
    {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js') }} 


   <script language="javascript" type="text/javascript">
   CKEDITOR.replace('editor',{
      filebrowserBrowseUrl: '/browser/browse.php',
      filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
      filebrowserUploadUrl: '/uploader/upload.php',
      filebrowserImageUploadUrl: '/uploader/upload.php?type=Images',
      filebrowserWindowWidth: '900',
      filebrowserWindowHeight: '400',
      filebrowserBrowseUrl: '../../../ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl: '../../../ckfinder/ckfinder.html?Type=Images',
      filebrowserFlashBrowseUrl: '../../../ckfinder/ckfinder.html?Type=Flash',
      filebrowserUploadUrl: '../../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: '../../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl: '../../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    </script>



</footer>

@stop



