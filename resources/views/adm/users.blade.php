@extends('layouts.adm')

@section('title', 'Users')
@section('content')


<section class="content-header">
    <h1>
      User
      <small>Data Users</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Users</li>
    </ol>
  </section>
  <a href="#" data-toggle="modal" data-target="#modaladd" data-remote="false" id="button-create" class="btn btn-social-icon btn-dropbox"><i class="fa fa-fw fa-pencil" style="padding: 8px;"></i></a>
   <!-- Main content -->
   <section class="content">
  
  <div class="box">
     <!-- /.box-header -->
     <div class="box-body">
       <table id="example1" class="table table-bordered table-striped">
         <thead>
         <tr>
           <th>No</th>
           <th>Name</th>
           <th>Username</th>
           <th>Action</th>
         </tr>
         </thead>
         <tbody>
         <?php $no = 0;?>
         @foreach($users as $s)
         <tr>
           <td>{{ ++$no}}</td>
           <td>{{ $s->name }}</td>
           <td>{{ $s->username }}</td>
           <td width="50px"><a href="/user/read/{{ $s->id}}"class="btn btn-social-icon btn-warning"><i class="fa fa-fw fa-edit " style="font-size: 15px;"></i></a> <a href="/user/read/{{ $s->id}}" class="btn btn-social-icon btn-google"><i class="fa fa-fw fa-trash-o" style="font-size: 15px;"></i></a></td>
         </tr>
         @endforeach
       
         </tbody>
      
       </table>
     </div>
     <!-- /.box-body -->
   </div>
    


</section>


@endsection