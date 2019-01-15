


 @extends ('adminsite.layout')

 @section('cabecera')
 @parent
 {{ Html::style('Calendario/css/calendar.css') }}
   {{ Html::style('Calendario/css/bootstrap-datetimepicker.min.css') }}
   {{ Html::style('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css') }}
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

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
      <li>
       <a href="/gestion/tipos/calendario"><i class="fa fa-calendar-plus-o"></i>Tipo Evento</a>
      </li>

     </ul>
    </div>

<div class="container">
  <div class="row">
                            <div class="col-md-12">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                                        </div>
                                        <h2><strong>Crear</strong> Usuario</h2>
                                    </div>
                                    <!-- END Form Elements Title -->
                                    
                                    <!-- Basic Form Elements Content -->
                                      
                                      {{Form::open(array('method' => 'PUT','class'=>'form-horizontal','id' =>'defaultForm', 'url' => array('gestion/calendario/actualizar',$eventos->id))) }}

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Titulo</label>
                                            <div class="col-md-9">
                                                {{Form::text('title', $eventos->title, array('class' => 'form-control','placeholder'=>'Ingrese titulo'))}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-email-input">Fecha Inicio</label>
                                            <div class="col-md-9 date" id="datetimepicker7">
                                                {{Form::text('start', $eventos->start_old, array('class' => 'form-control','readonly' => 'readonly','placeholder'=>'Ingrese fecha inicio'))}}
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-email-input">Fecha Finalización</label>
                                            <div class="col-md-9 date" id="datetimepicker9">
                                               {{Form::text('end', $eventos->end_old, array('class' => 'form-control','readonly' => 'readonly','placeholder'=>'Ingrese fecha finalización'))}} 
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-password-input">Descripción</label>
                                            <div class="col-md-9">
                                                {{Form::textarea('body', $eventos->body, array('class' => 'form-control','placeholder'=>'Ingrese descripción'))}}
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-password-input">Imagen</label>
                                            <div class="col-md-9">
                                                <input type="text" name="FilePath" readonly="readonly" onclick="openKCFinder(this)" value="{{$eventos->imagen}}" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-password-input">Enlace Evento</label>
                                            <div class="col-md-9">
                                               {{Form::text('url', $eventos->url, array('class' => 'form-control','placeholder'=>'Ingrese URL'))}}
                                            </div>
                                        </div>
                              
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-password-input">Lugar Evento</label>
                                            <div class="col-md-9">
                                               {{Form::text('lugar', '', array('class' => 'form-control','placeholder'=>'Ingrese Lugar'))}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Tipo Evento</label>
                                            <div class="col-md-9">
                                                <select name="contenidos" class="form-control" required>
                                          
                                                   <option value="{{$eventos->class}}" selected="selected">{{$eventos->class}}</option>
                            
                                                  @foreach($tipos as $tipos)
                                                 <option value="{{$tipos->tipo}}">{{$tipos->tipo}}</option>
                                                  @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        {{Form::hidden('metro', Auth::user()->id , array('class' => 'form-control'))}}


                                          <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    {{ Form::close() }}

                                    @foreach ($eventos as $evento) 
                                   @endforeach
                                
                                </div>
                                <!-- END Basic Form Elements Block -->
                            </div>
                          </div>
                          
</div>


  









   {{ Html::script('Calendario/jquery/jquery.min.js') }}
   
  <script type="text/javascript">
$(document).ready(function(){
    $('#datetimepicker7').datetimepicker({
      pickTime: true,
      format: 'MM/DD/YYYY HH:mm'

    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#datetimepicker9').datetimepicker({
      pickTime: true,
      format: 'MM/DD/YYYY HH:mm'

    });
});
</script>

<script type="text/javascript">
function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open('/vendors/kcfinder/browse.php?type=images&dir=files/public', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}
</script>

     {{ Html::script('Calendario/js/moment.min.js') }}
     {{ Html::script('Calendario/js/bootstrap-datetimepicker.min.js') }}
     
     {{ Html::script('Calendario/js/validator.js')}}
     {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js') }}
   
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

@stop


