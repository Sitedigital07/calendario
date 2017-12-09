




     @extends ('adminsite.layout')
<!-- Define el titulo de la Página -->    


   @section('cabecera')
    @parent
     {{ Html::style('Calendario/css/calendar.css') }}
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
  <?php $status=Session::get('status');?>
   @if($status=='ok_create')
    <div class="alert alert-success">
     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
     <strong>Evento registrado con exito</strong>
    </div>
   @endif

   @if($status=='ok_delete')
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
     <strong>Evento eliminado con exito</strong>
    </div>
   @endif

   @if($status=='ok_update')
    <div class="alert alert-warning">
     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
     <strong>Evento actualizado con exito</strong>
    </div>
   @endif
 </div>


   <div class="container">
 <div class="page-header">
  <div class="pull-right form-inline">
      <div class="btn-group">
        <button class="btn btn-warning" data-calendar-nav="prev"><< Prev</button>
        <button class="btn btn-default" data-calendar-nav="today">Hoy</button>
        <button class="btn btn-warning" data-calendar-nav="next">Next >></button>
      </div>
      <div class="btn-group">
        <button class="btn btn-warning" data-calendar-view="year">Año</button>
        <button class="btn btn-warning active" data-calendar-view="month">Mes</button>
        <button class="btn btn-warning" data-calendar-view="week">Semana</button>
        <button class="btn btn-warning" data-calendar-view="day">Dia</button>
      </div>
  </div>
 
  <h3></h3>
  <small>Calendario Digital</small>
  </div>
 

  <div id="calendar"></div>
  </div>

<footer>


<script type="text/javascript">
function BrowseServer()
{
  // You can use the "CKFinder" class to render CKFinder in a page:
  var finder = new CKFinder();
  finder.basePath = '../';  // The path for the installation of CKFinder (default = "/ckfinder/").
  finder.selectActionFunction = SetFileField;
  finder.popup();

  // It can also be done in a single line, calling the "static"
  // popup( basePath, width, height, selectFunction ) function:
  // CKFinder.popup( '../', null, null, SetFileField ) ;
  //
  // The "popup" function can also accept an object as the only argument.
  // CKFinder.popup( { basePath : '../', selectActionFunction : SetFileField } ) ;
}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl )
{
  document.getElementById( 'xFilePath' ).value = fileUrl;
}
</script>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

 {{ Html::script('Calendario/jquery/jquery.min.js') }}
     {{ Html::script('Calendario/bootstrap2/js/bootstrap.min.js') }}

  <script type="text/javascript">
  $(function () {
    $('#datetimepicker8').datetimepicker();
    $('#datetimepicker7').datetimepicker();
    $('#datetimepicker9').datetimepicker();
    $("#datetimepicker8").on("dp.change",function (e) {
    $("#datetimepicker7").on("dp.change",function (e) {
    $('#datetimepicker9').data("DateTimePicker").setMinDate(e.date);});
    $("#datetimepicker9").on("dp.change",function (e) {
    $('#datetimepicker8').data("DateTimePicker").setMaxDate(e.date);
    $('#datetimepicker7').data("DateTimePicker").setMaxDate(e.date);
    });
    });
    });

</script>

     {{ Html::script('Calendario/js/underscore-min.js') }}
     {{ Html::script('Calendario/js/jstz.min.js') }}
     {{ Html::script('Calendario/js/es-ES.js') }}
     {{ Html::script('Calendario/js/calendar.js') }}
     {{ Html::script('Calendario/js/apps.js') }}
     {{ Html::script('Calendario/js/moment.min.js') }}
     {{ Html::script('Calendario/js/bootstrap-datetimepicker.min.js') }}
     {{ Html::script('Calendario/js/datetime.js') }}
     {{ Html::script('Calendario/js/validator.js') }}
     {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js') }}


</footer>
 @stop

