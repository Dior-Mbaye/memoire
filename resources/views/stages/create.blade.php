@extends('layouts.app')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Ajouter Stage</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Add Stages</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
  <form class="text-center" style="color: #757575;" action="{{ url('stages.store') }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <!-- Name -->
  <div class="md-form mt-3">
      <label for="materialContactFormName">Nom de l'Entreprise</label>
      <input type="text" name="nom_entreprise" id="materialContactFormName" class="form-control">
  </div>

  <!-- E-mail -->
  <div class="md-form">
      <label for="materialContactFormEmail">Profil demamdé</label>
      <input type="text" name="profil_demande" id="materialContactFormEmail" class="form-control"></br>
  </div>

  <!-- Subject -->
  <div class="md-form">
      <label for="materialContactFormEmail">Durée</label>
      <input type="number" name="duree_stage" id="materialContactFormEmail" class="form-control"></br>
  </div>

  <!--Message-->
  <div class="md-form">
  </br>
      <label for="materialContactFormMessage">Message</label>
      <textarea name="message" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
  </div></br>

  <div class="custom-file">
      <input type="file" name="fichier" class="custom-file-input" id="customFile">
      <label class="custom-file-label" for="customFile">Téléverser fichier</label>
  </div>

  <!-- Send button -->
  <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Enregistrer</button>

</form>
  </div>
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</section>  


@endsection