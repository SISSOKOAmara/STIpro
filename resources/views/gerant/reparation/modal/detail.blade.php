
<!-- @include('admin.reparation/modal/detail') -->

<div class="ccontainer" style="background-image:url('/assetss/images/stiLogo.jpg');">
<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticModalLabel">Static Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <tbody>
                                @foreach($details as $detail)
                            <tr>
                            <td>{{$detail->categorie}}</td>
                            <td>{{$detail->marque}}</td>
                            <td>{{$detail->panne}}</td>
                            <td>{{$detail->note}}</td>
                            <td>{{$detail->prix}}F</td>
                            <td>{{$detail->rdv}}</td>
                            <td>{{$detail->etat}}</td>
                            @endforeach
                             </tbody>
                                <p>
                                    This is a static modal, backdrop click will not close it.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
</div>