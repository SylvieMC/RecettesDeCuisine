@extends('base')

@section('main')
            <heading></heading>
            <div class="container-fluid p-0">
                <div class="col-sm-12">
                  @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div>
                  @endif
                </div>
                <section class="resume-section p-3 p-lg-5 d-flex d-column" id="index">
                    <div class="my-auto">
                        <h1 class="mb-0">Recettes
                            <span class="text-primary">du mois</span>
                        </h1>
                        <div class="subheading mb-5">Partagez vos meilleures recettes sur
                            <a href="#" title="site de recettes de cuisine">recette-de-cuisine.com</a>
                        </div>
                        <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}" :categories="{{ $categories }}" :count="{{ $nbCategorieParRecette }}"></recettes>
                        <bottom></bottom>
                    </div>
                </section>
            </div>
        </div>
@endsection
