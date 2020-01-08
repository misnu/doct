@extends('layouts.adm')

@section('title', 'Menu')
@section('content')

<section class="content-header">
    <h1>
      Form
      <small> Menu</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Form Menu</li> 
    </ol>
  
    <form class="form-horizontal" method="post" action="/menu/create">
    @csrf
    <input type="hidden" name="id" value="{{ Request::segment(3) }}">
  <section class="content">
      <div class="row">

        <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="menu" class="col-sm-2 control-label">Sub Menu</label>
                  <div class="col-sm-10">
                    <select  class="form-control"  name="menu" id="menu">
                      <option value="">Select</option>
                      @foreach($menu as $l)
                        <option value="{{ $l->id }}"  <?php if($l->id == @$data->sub){ echo 'selected'; }?>>{{ $l->name }}</option>
                      @endforeach

                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="menu" class="col-sm-2 control-label">Language</label>
                  <div class="col-sm-10">
                    <select  class="form-control"  name="language" id="language">
                   
                      @foreach($language as $l)
                        <option value="{{ $l->id }}" <?php if($l->desc == Request::segment(4)){ echo 'selected'; }?>>{{ $l->name }}</option>
                      @endforeach

                    </select>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/menu" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            
          </div>
          </div>
          <!-- /.box -->

         
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>

    </form>
    @endsection