@extends('layouts.app')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Modifier Stage</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Edit Stages</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <form method="post" action="{{ url('stages.update',$stage->id) }}" enctype="multipart/form-data">
      @method('PUT')
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Nom Entreprise</label>
          <div class="col-md-6"><input type="text" name="nom_entreprise" class="form-control" value="{{ $stage->nom_entreprise }}"></div>
          <div class="clearfix"></div>
        </div>
        <div class="row">
          <label class="col-md-3">Profil demandé</label>
          <div class="col-md-6">
          <input type="text" name="profil_demande" class="form-control" value="{{ $stage->profil_demande }}">
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="row">
          <label class="col-md-3">Durée stage</label>
          <div class="col-md-6">
          <input type="text" name="duree_stage" class="form-control" value="{{ $stage->duree_stage }}">
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="row">
          <label class="col-md-3">Message</label>
          <div class="col-md-6">
          <input type="text" name="message" class="form-control" value="{{ $stage->message }}">
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="row">
          <label class="col-md-3">Fichier</label>
          <div class="col-md-6">
          <input type="file" name="fichier" class="form-control" value="{{ $stage->fichier }}">
          </div>
          <div class="clearfix"></div>
        </div>

      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Sauvegarder">
      </div>
    </form>
  </div>
</section>  


@endsection