<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="{{ route('storeUser') }}">
                @csrf
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control top" placeholder="username" name="username">
                            </div>
                            <test-vue></test-vue>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="date" class="form-control" placeholder="date birdthay" name="birdthay">
                            </div>
                            <div class="col">

                                <textarea class="form-control" placeholder="adresse" rows="3" name="adresse"></textarea>
                            </div>
                        </div>
                        <nbrkids-vue></nbrkids-vue>
                        <div class="row mt-2">
                           
                            <div class="col">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label for="inputState">Jobs</label>
                                        <select id="inputState" class="form-control" name="jobs">
                                            @foreach ( $jobs as $job)
                                            <option value="{{ $job->name }}" id="{{ $job->id }}">{{ $job->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-4" >
                                        <button type="button" id="job" class="btn btn-sm"> Ajouter un job</button>
                                    </div>
                                </div>
                                <div id="block">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" placeholder="job name" name="jobName">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="description" rows="3" name="descJob"></textarea>
                                    </div>
                                </div>
                               


                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <script>
    $(document).ready(function() {
    $('#married').change(function() {
        alert('ok');
      if ($(this).is(':checked')) {

        $('#kids').hide();
        // var radioValue = $(this).val();
        // $('#message').text("Vous avez sélectionné : " + radioValue);
      }
    });
  });
</script> --}}
