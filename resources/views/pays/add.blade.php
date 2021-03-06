@extends('acceuil')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Ajouter un pays</h2>
            <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
        </div>
        <div class="card-body">
            @if(isset($confirmation))
                    @if($confirmation==1)
                        <div class="alert alert-success">Pays ajouté avec success</div>
                    @else
                        <div class="alert alert-danger">Pays non ajouté</div>
                    @endif
            @endif
            <form method="POST" action="{{ route('persistpays')}}" >
            @csrf
                <div class="form-group ">
                	<label class="control-label">Nom</label>
                    <input type="text" name="nom" class="form-control"  >
                </div>
                <input type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer"/>
                <input type="reset" value="Annuler" class="btn btn-danger "/>
            </form>
        </div>
    </div>
</div>
@endsection
