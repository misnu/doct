@extends('layouts.adm')

@section('title', 'Users')
@section('content')


<section class="content-header">
    <h1>
      Menu
      <small>Data Menu</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Menu</li>
    </ol>
  </section>
  <a href="/menu/create" data-remote="false" id="button-create" class="btn btn-social-icon btn-dropbox"><i class="fa fa-fw fa-pencil" style="padding: 8px;"></i></a>
  <!-- Main content -->
  <section class="content">
  
  <div class="box">
     <!-- /.box-header -->
     @if ($message = Session::get('message'))
      <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
    @endif
     <div class="box-body">
       <table id="example1" class="table table-bordered table-striped">
         <thead>
         <tr>
           <th>No</th>
           <th>Name</th>
           <th><img style="width:20px" src="/img/flag-en.png"></th>
           <th><img style="width:20px" src="/img/flag-id.png"></th>
           <th>Action</th>
         </tr>
         </thead>
         <tbody>
         <?php $no = 0; ?>
         @foreach($menu as $m)
         <tr>
           <td>{{ ++$no}}</td>
           <td>
           @if(!empty($m->name))  
            {{ $m->name}}
           @else
           {{ $m->name_id}}
           @endif
          
          </td>
           <td>
              @if(!empty($m->name))
              <a href="/menu/update/{{ $m->id}}/en"class="btn btn-social-icon btn-warning"><i class="fa fa-fw fa-edit " style="font-size: 15px;"></i></a>
              @else
              <a href="/menu/create/{{ $m->id}}/en"class="btn btn-social-icon btn-primary"><i class="fa fa-fw fa-pencil" style="font-size: 15px;"></i></a> 
              @endif
            </td>
           <td>
           @if(!empty($m->name_id))
             <a href="/menu/update/{{ $m->id}}/id"class="btn btn-social-icon btn-warning"><i class="fa fa-fw fa-edit " style="font-size: 15px;"></i></a> 
             @else
             <a href="/menu/create/{{ $m->id}}/id"class="btn btn-social-icon btn-primary"><i class="fa fa-fw fa-pencil" style="font-size: 15px;"></i></a> 
             @endif
            </td>
           <td width="50px"><a href="/menu/delete/{{ $m->id}}" class="btn btn-social-icon btn-google"><i class="fa fa-fw fa-trash-o" style="font-size: 15px;"></i></a></td>
         </tr>
         @endforeach
       
         </tbody>
      
       </table>
     </div>
     <!-- /.box-body -->
   </div>
    


</section>


@endsection