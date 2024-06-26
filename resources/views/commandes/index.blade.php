@extends('master')
@section('title','commandes')
@section('content')

<div class="row">
      @if (session('success'))
      <div class="alert alert-success" role="alert">
            <span>{{ session('success') }}</span>
      </div>
      @endif
      <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                  <div class="card-body p-4">
                        <div class="row">
                              <h5 class="col-10 card-title fw-semibold mb-4">Liste des Commandes</h5>
                              <div class="col">
                                    <a href="{{route('commandes.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Nouveau</a>
                              </div>
                        </div>
                        <div class="table-responsive">
                              <table class="table table-hover text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">ID</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Date de commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Etat de commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Actions</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @if (count($commandes)>0)
                                          @foreach ( $commandes as $commande )
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">{{$commande->id}}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->dateCmd}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->etatCmd}}</>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <div class="d-flex align-items-center gap-2">
                                                            <a href="{{route('commandes.show', $commande->id)}}" class="badge border text-dark rounded-3 fw-semibold">
                                                                  <span>
                                                                        Show
                                                                  </span>
                                                            </a>
                                                            <a href="{{route('commandes.edit', $commande->id)}}" class="badge border text-dark rounded-3 fw-semibold">
                                                                  <span>
                                                                        Edit
                                                                  </span>
                                                            </a>
                                                            <form action="{{route('commandes.destroy',$commande->id)}}" method="post">
                                                                  @csrf
                                                                  @method('delete')
                                                                  <button type="submit" onclick="return confirm('voulez vous supprimer ce client')" class="badge border text-dark rounded-3 fw-semibold" style="border: none;">
                                                                        <span>
                                                                              Delete
                                                                        </span>
                                                                  </button>
                                                            </form>
                                                      </div>
                                                </td>
                                          </tr>
                                          @endforeach
                                          @else
                                          <tr class="text-center">
                                                <td class="border-bottom-0" colspan="5">
                                                      Aucune Commande Trouve
                                                </td>
                                          </tr>
                                          @endif
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection