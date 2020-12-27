@extends('pages')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nom Entreprise</td>
          <td>Profil demandé</td>
          <td>Durée stage</td>
          <td>Message</td>
          <td>Fichier téléversé</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($stages as $case)
        <tr>
            <td>{{$case->id}}</td>
            <td>{{$case->nom_entreprise}}</td>
            <td>{{$case->profil_demande}}</td>
            <td>{{$case->duree_stage}}</td>
            <td>{{$case->message}}</td>
            <td>{{$case->fichier}}</td>
            <td><a href="#" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ url('pages.destroy', $case->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection