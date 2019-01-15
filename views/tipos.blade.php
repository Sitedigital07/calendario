@extends ('adminsite.layout')

    @section('cabecera')
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
      <li>
       <a href="/gestion/tipos/calendario"><i class="fa fa-calendar-plus-o"></i>Tipo Evento</a>
      </li>


  </ul>
</div>


 <div class="container">
  <?php $status=Session::get('status'); ?>
  @if($status=='ok_create')
   <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Se registrado el Tema con exito</strong>
   </div>
  @endif

  @if($status=='ok_delete')
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Se ha eliminado la Nota seleccionada</strong>
   </div>
  @endif

  @if($status=='ok_update')
   <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usuario actualizado con éxito</strong>
   </div>
  @endif

 </div>


<div class="container">
<div class="container-fluid">
  <a href="/gestion/crear-tipo" class="btn btn-primary pull-right">Crear Tipo</a>
</div>
<br>
 <div class="block full">
                            <div class="block-title">
                                <h2><strong>Categorias</strong> Registradas</h2>
                            </div>
                           

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Titulo</th>
                                            <th class="text-center">Color</th>
                                          
                                         
                                            
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($tipos as $tipos) 
                                        <tr>
                                            <td class="text-center">{{ $tipos->tipo }}</td>
                                            <td class="text-center">{{ $tipos->color }}</td>
                                            
                                            <td class="text-center">


        
      <a href="<?=URL::to('gestion/calendario/editar-tipo/');?>/{{ $tipos->id }}"><span  id="tip" data-toggle="tooltip" data-placement="top" title="Editar Contenido" class="btn btn-primary"><i class="fa fa-pencil-square-o sidebar-nav-icon"></i></span></a>
      <script language="JavaScript">
function confirmar ( mensaje ) {
return confirm( mensaje );}
</script>
    <a href="<?=URL::to('gestion/calendario/eliminar-tipo/');?>/{{ $tipos->id }}" onclick="return confirmar('¿Está seguro que desea eliminar el registro?')"><span id="tup" data-toggle="tooltip" data-placement="bottom" title="Editar Página" class="btn btn-danger"><i class="hi hi-trash sidebar-nav-icon"></i></span></a>
                                            </td>
                                        </tr>
                                      @endforeach 
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Content -->




</div>



  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

@stop