@extends('layouts.adm')

@section('title', 'Content')
@section('content')


<section class="content-header">
    <h1>
      Form
      <small> Content</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Form Content</li> 
    </ol>
  
    <form class="form-horizontal" method="post" action="/content_update">
    @csrf
  <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header">

            
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80" >
                    @if(Request::segment(3) == 'en')    
                        {{ $data->content }}
                        @else
                          {{ $data->content_id }}
                        @endif

                           
                    </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->

         
        </div>
        <div class="col-md-4">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                <input type="hidden" name="id" value="{{ $data->id }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $data->name}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="menu" class="col-sm-2 control-label">Menu</label>

                  <div class="col-sm-10">
                  <select class="form-control" name="menu"> 
                    @foreach($menu as $m)
                        <option value="{{ $m->id }}" @if($m->id == $data->id_menu ) selected @endif  >{{ $m->name }} </option>
                    @endforeach
                  </select>
                
                  </div>
                </div>

                <div class="form-group">
                  <label for="menu" class="col-sm-2 control-label">language</label>

                  <div class="col-sm-10">
                  <select class="form-control" name="language"> 
                    @foreach($language as $l)
                        <option value="{{ $l->id }}" <?php if($l->desc == Request::segment(3) ){ echo 'selected'; }?> >{{ $l->name }}</option>
                    @endforeach
                  </select>
                
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/content" class="btn btn-default">Cancel</a>
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