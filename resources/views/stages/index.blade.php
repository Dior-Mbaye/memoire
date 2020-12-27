@extends('layouts.app')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div>
      </div>
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Stages</h1>
      </div><!-- /.col -->
      <!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
  	<p>
  		<a href="{{ url('stages.create') }}" class="btn btn-primary">Ajouter un stage</a>
  	</p>
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>ID</th>
  			<th>Nom entreprise</th>
  			<th>Profil demandé</th>
            <th>Durée stage</th>
  			<th>Message</th>
  			<th>Fichier</th>
  		</tr>
  		@foreach($stages as $s)
  			<tr>
  				<td>{{ $s->id }}</td>
  				<td>{{ $s->nom_entreprise }}</td>
                <td>{{ $s->profil_demande }}</td>
  				<td>{{ $s->duree_stage }}</td>
  				<td>{{ $s->message }}</td>
  				<td>{{ $s->fichier }}</td>
  				<td>
            <a href="{{ url('stages.edit',$s->id) }}" class="btn btn-info">Modifier</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Supprimer</a>
            <form action="{{ url('stages.destroy',$s->id) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </td>
  			</tr>
  		@endforeach
  	</table>
  </div>
</section>	


@endsection