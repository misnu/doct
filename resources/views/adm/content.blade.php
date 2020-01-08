@extends('layouts.adm')

@section('title', 'Content')
@section('content')

<section class="content-header">
    <h1>
      Content
      <small>Data Content</small>
    </h1> 
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Content</li> 
    </ol>
  </section>
  <a href="/content_create"  id="button-create" class="btn btn-social-icon btn-dropbox"><i class="fa fa-fw fa-pencil" style="padding: 8px;"></i></a>
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
                  <th>Menu</th>
                  <th>Create By</th>
                  <th>Create Date</th>
                  <th><img style="width:20px" src="/img/flag-en.png"></th>
                  <th><img style="width:20px" src="/img/flag-id.png"></th>
              
                  <th width="50px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no= 0;?>
                @foreach($content as $c)
                <tr>
                  <td>{{ ++$no}}</td>
                  <td>{{ $c->name}}</td>
                  <td>{{ $c->name_menu}}</td>
                  <td>{{ $c->create_by}}</td>
                  <td>{{ $c->create_date}}</td>
                  <td>
                    @if(!empty($c->content))
                    <a href="/content_update/{{ $c->id}}/en"class="btn btn-social-icon btn-warning"><i class="fa fa-fw fa-edit " style="font-size: 15px;"></i></a>
                    @else
                    <a href="/content/create/{{ $c->id}}/en"class="btn btn-social-icon btn-primary"><i class="fa fa-fw fa-pencil" style="font-size: 15px;"></i></a> 
                    @endif
                  </td>
                  <td>
                    @if(!empty($c->content_id))
                    <a href="/content_update/{{ $c->id}}/id"class="btn btn-social-icon btn-warning"><i class="fa fa-fw fa-edit " style="font-size: 15px;"></i></a>
                    @else
                    <a href="/content/create/{{ $c->id}}/id"class="btn btn-social-icon btn-primary"><i class="fa fa-fw fa-pencil" style="font-size: 15px;"></i></a> 
                    @endif
                  </td>
                  
                 
                  <td width="50px"><a href="/content_delete/{{ $c->id }}" class="btn btn-social-icon btn-google"><i class="fa fa-fw fa-trash-o" style="font-size: 15px;"></i></a></td>
                </tr>
                @endforeach
              
                </tbody>
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           
       

  </section>


@endsection