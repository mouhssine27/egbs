
<div class="modal fade" id="detailsUser{{ $utilisateur->id }}" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">details utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
           
                @csrf
                <div class="modal-body">
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action ">
                       username : {{ $utilisateur->username }}
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">jobs : {{ $utilisateur->name }}</button>
                        <button type="button" class="list-group-item list-group-item-action">age : {{ $utilisateur->age }}</button>
                        <button type="button" class="list-group-item list-group-item-action"> date of birthay :{{ $utilisateur->date_of_birth }}</button>
                        <button type="button" class="list-group-item list-group-item-action" >adresse :{{ $utilisateur->adresse }}</button>
                        @if( $utilisateur->married == 0)
                        <button type="button" class="list-group-item list-group-item-action" >married : non</button>
                        @else
                        <button type="button" class="list-group-item list-group-item-action" >married : oui</button>
                        @endif
                        <button type="button" class="list-group-item list-group-item-action" >kids : {{ $utilisateur->kids }}</button>
                    </div>
                </div>
             
        </div>
    </div>
</div>
            
       