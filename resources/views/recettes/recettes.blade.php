@extends('base')

@section('main')
            <heading></heading>
            <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="encemoment">
                <div class="my-auto">
                    <h2 class="mb-5">La liste complete des recettes</h2>
                    <div class="resume-item d-flex flex-column flex-md-row mb-5">
                        <recettes :recettes="{{ $recettes }}" :utilisateurs="{{ $utilisateurs }}" :categories="{{ $categories }}" :count="{{ $nbCategorieParRecette }}"></recettes>
                    </div>
                </div>
            </section>
            <bottom></bottom>
@endsection
